<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PelamarResource\Pages;
use App\Models\Pelamar;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PelamarResource extends Resource
{
    protected static ?string $model = Pelamar::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Data Pelamar';
    protected static ?string $pluralLabel = 'Pelamar';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nama_lengkap')->label('Nama Pelamar')->searchable(),
            Forms\Components\TextInput::make('email')->label('Email'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_lengkap')->label('Nama'),
                Tables\Columns\TextColumn::make('email'),
            ])
            ->actions([]) // Menghapus tombol Edit/Delete
            ->bulkActions([]); // Nonaktifkan aksi massal
    }

    public static function getLabel(): string
    {
        return 'Data Pelamar';
    }

    public static function getPluralLabel(): string
    {
        return 'Data Pelamar';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Data Pengguna';
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPelamars::route('/'),
        ];
    }
}
