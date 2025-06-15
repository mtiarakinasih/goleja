<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KategoriWaktuResource\Pages;
use App\Models\KategoriWaktu;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class KategoriWaktuResource extends Resource
{
    protected static ?string $model = KategoriWaktu::class;
    protected static ?string $navigationIcon = 'heroicon-o-clock';
    protected static ?string $navigationLabel = 'Kategori Waktu';
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
            Tables\Columns\TextColumn::make('nama')->label('Jenis Waktu')->searchable(),
        ])->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ]);
    }

    public static function getLabel(): string
    {
        return 'Kategori Waktu';
    }

    public static function getPluralLabel(): string
    {
        return 'Kategori Waktu';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Master Data';
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKategoriWaktus::route('/'),
            'create' => Pages\CreateKategoriWaktu::route('/create'),
            'edit' => Pages\EditKategoriWaktu::route('/{record}/edit'),
        ];
    }
}
