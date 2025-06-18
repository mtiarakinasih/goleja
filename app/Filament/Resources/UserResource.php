<?php

namespace App\Filament\Resources;

use App\Models\User;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Forms\Form;
use Illuminate\Database\Eloquent\Collection;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationLabel = 'Verifikasi User Perusahaan';

    public static function form(Form $form): Form
    {
        return $form->schema([]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->query(User::query()->where('status', 'pending')) // hanya tampilkan pending
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Nama')->searchable(),
                Tables\Columns\TextColumn::make('email')->label('Email')->searchable(),
                Tables\Columns\BadgeColumn::make('role')
                    ->label('Role')
                    ->colors([
                        'admin' => 'primary',
                        'perusahaan' => 'success',
                        'kandidat' => 'warning',
                    ])
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'admin' => 'Admin',
                        'perusahaan' => 'Perusahaan',
                        'kandidat' => 'Kandidat',
                        default => 'Unknown',
                    }),
                Tables\Columns\BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'pending' => 'warning',
                        'approved' => 'success',
                        'rejected' => 'danger',
                    ])
                    ->formatStateUsing(fn (string $state): string => ucfirst($state)),
            ])
            ->bulkActions([
                Tables\Actions\BulkAction::make('approve')
                    ->label('Approve User')
                    ->action(fn (Collection $records) => $records->each->update(['status' => 'approved']))
                    ->requiresConfirmation()
                    ->color('success'),

                Tables\Actions\BulkAction::make('reject')
                    ->label('Reject User')
                    ->action(fn (Collection $records) => $records->each->update(['status' => 'rejected']))
                    ->requiresConfirmation()
                    ->color('danger'),
            ]);
    }

    public static function getLabel(): string
    {
        return 'Verifikasi User Perusahaan';
    }

    public static function getPluralLabel(): string
    {
        return 'Verifikasi  User Perusahaan';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Manajemen Aplikasi';
    }

    public static function getPages(): array
    {
        return [
            'index' => \App\Filament\Resources\UserResource\Pages\ListUsers::route('/'),
        ];
    }
}
