<?php

namespace App\Filament\Resources;

use App\Models\Perusahaan;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\PerusahaanResource\Pages;


class PerusahaanResource extends Resource
{
    protected static ?string $model = Perusahaan::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    protected static ?string $navigationLabel = 'Data Perusahaan';
    protected static ?string $pluralModelLabel = 'Perusahaan';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_perusahaan')
                    ->label('Nama')
                    ->searchable(),

                TextColumn::make('email')
                    ->label('Email'),

                TextColumn::make('no_telepon')
                    ->label('No. Telepon')
                    ->default('-'),

                TextColumn::make('website')
                    ->label('Website')
                    ->default('-'),

                TextColumn::make('logo')
                    ->label('Logo')
                    ->default('-'),

                TextColumn::make('user.status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'approved' => 'success',
                        'rejected' => 'danger',
                        default => 'gray',
                    })
                    ->default('-'),
            ])
            ->actions([]) // no edit/view/delete
            ->bulkActions([])
            ->emptyStateActions([]);
    }

    public static function getLabel(): string
    {
        return 'Data Perusahaan';
    }

    public static function getPluralLabel(): string
    {
        return 'Data Perusahaan';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Data Pengguna';
    }

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([]); // readonly, no form needed
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPerusahaans::route('/'),
        ];
    }


    public static function shouldRegisterNavigation(): bool
    {
        return true;
    }
}
