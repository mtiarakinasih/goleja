<?php

namespace App\Filament\Resources;

use App\Models\Lowongan;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use App\Filament\Resources\LowonganResource\Pages;
use Filament\Notifications\Notification;


class LowonganResource extends Resource
{
    protected static ?string $model = Lowongan::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationLabel = 'Data Lowongan  Kerja';
    protected static ?string $pluralModelLabel = 'Manajemen Data Lowongan Kerja';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nama')
                ->label('Nama Lowongan')
                ->disabled(),

            Forms\Components\Select::make('status')
                ->label('Status')
                ->options([
                    'pending' => 'Pending',
                    'approved' => 'Approved',
                    'rejected' => 'Rejected',
                ])
                ->disabled()
                ->required(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Lowongan')
                    ->searchable(),

                Tables\Columns\TextColumn::make('kategoriBidang.nama')
                    ->label('Kategori Bidang')
                    ->searchable(),

                Tables\Columns\TextColumn::make('kategoriWaktu.nama')
                    ->label('Kategori Waktu')
                    ->searchable(),

                Tables\Columns\TextColumn::make('perusahaan.nama_perusahaan')
                    ->label('Perusahaan')
                    ->searchable(),

                Tables\Columns\TextColumn::make('lokasi')
                    ->searchable(),

                Tables\Columns\TextColumn::make('gaji')
                    ->money('IDR', true),

                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state) => match ($state) {
                        'pending' => 'warning',
                        'approved' => 'success',
                        'rejected' => 'danger',
                    }),
            ])
            ->filters([
                    Tables\Filters\SelectFilter::make('status')
                        ->label('Filter Status')
                        ->options([
                            '' => 'Semua',
                            'pending' => 'Pending',
                            'approved' => 'Approved',
                            'rejected' => 'Rejected',
                        ]),

                    Tables\Filters\SelectFilter::make('kategori_bidang_id')
                        ->label('Kategori Bidang')
                        ->relationship('kategoriBidang', 'nama')
                        ->searchable()
                        ->preload(),

                    Tables\Filters\SelectFilter::make('kategori_waktu_id')
                        ->label('Kategori Waktu')
                        ->relationship('kategoriWaktu', 'nama')
                        ->searchable()
                        ->preload(),
            ])
            ->bulkActions([
    Tables\Actions\BulkAction::make('approve')
        ->label('Approve')
        ->action(function (Collection $records) {
            foreach ($records as $record) {
                if ($record->status === 'pending') {
                    $record->update(['status' => 'approved']);
                    Notification::make()
                        ->title("Lowongan '{$record->nama}' di {$record->perusahaan->nama_perusahaan} berhasil di-approve.")
                        ->success()
                        ->send();
                } elseif ($record->status === 'approved') {
                    Notification::make()
                        ->title("Lowongan '{$record->nama}' sudah di-approve sebelumnya.")
                        ->warning()
                        ->send();
                } elseif ($record->status === 'rejected') {
                    Notification::make()
                        ->title("Lowongan '{$record->nama}' sudah pernah ditolak.")
                        ->danger()
                        ->send();
                }
            }
        })
        ->requiresConfirmation()
        ->color('success'),

    Tables\Actions\BulkAction::make('reject')
        ->label('Reject')
        ->action(function (Collection $records) {
            foreach ($records as $record) {
                if ($record->status === 'pending') {
                    $record->update(['status' => 'rejected']);
                    Notification::make()
                        ->title("Lowongan '{$record->nama}' di {$record->perusahaan->nama_perusahaan} berhasil ditolak.")
                        ->danger()
                        ->send();
                } elseif ($record->status === 'rejected') {
                    Notification::make()
                        ->title("Lowongan '{$record->nama}' sudah ditolak sebelumnya.")
                        ->warning()
                        ->send();
                } elseif ($record->status === 'approved') {
                    Notification::make()
                        ->title("Lowongan '{$record->nama}' sudah di-approve, tidak bisa ditolak.")
                        ->warning()
                        ->send();
                }
            }
        })
        ->requiresConfirmation()
        ->color('danger'),
    ]);

    }
    public static function getNavigationGroup(): ?string
    {
        return 'Master Data';
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLowongans::route('/'),
        ];
    }

    public static function modifyQueryUsing(Builder $query): Builder
    {
        return $query->orderByRaw("FIELD(status, 'pending', 'approved', 'rejected')")
                     ->latest('created_at');
    }
}
