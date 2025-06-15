<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KategoriBidangResource\Pages;
use App\Models\KategoriBidang;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class KategoriBidangResource extends Resource
{
    protected static ?string $model = KategoriBidang::class;
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationLabel = 'Kategori Bidang';
    protected static ?string $navigationGroup = 'Master Data';

    public static function form(Form $form): Form
    {
        return $form->schema([
            \Filament\Forms\Components\TextInput::make('nama')->required()->maxLength(255),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('nama')->label('Jenis Bidang')->searchable(),
        ])->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ]);
    }

    public static function getLabel(): string
    {
        return 'Kategori Bidang';
    }

    public static function getPluralLabel(): string
    {
        return 'Kategori Bidang';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Master Data';
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKategoriBidangs::route('/'),
            'create' => Pages\CreateKategoriBidang::route('/create'),
            'edit' => Pages\EditKategoriBidang::route('/{record}/edit'),
        ];
    }
}
