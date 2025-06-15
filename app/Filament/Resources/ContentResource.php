<?php

namespace App\Filament\Resources;

use App\Models\Content;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ContentResource extends Resource
{
    protected static ?string $model = Content::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationLabel = 'Verifikasi Konten';

    public static function form(Form $form): Form
    {
        return $form->schema([]); // ga ada form create & edit
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Judul')->searchable(),
                Tables\Columns\BadgeColumn::make('type')
                    ->label('Tipe')
                    ->colors([
                        'article' => 'primary',
                        'poster' => 'success',
                    ])
                    ->formatStateUsing(fn (string $state) => ucfirst($state)),
                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'pending' => 'warning',
                        'approved' => 'success',
                        'rejected' => 'danger',
                    ])
                    ->formatStateUsing(fn (string $state) => ucfirst($state)),
                Tables\Columns\TextColumn::make('created_at')->label('Dibuat')->dateTime(),
            ])
            ->bulkActions([
                Tables\Actions\BulkAction::make('approve')
                    ->label('Approve')
                    ->action(fn ($records) => $records->each->update(['status' => 'approved']))
                    ->requiresConfirmation()
                    ->color('success'),
                
                Tables\Actions\BulkAction::make('reject')
                    ->label('Reject')
                    ->action(fn ($records) => $records->each->update(['status' => 'rejected']))
                    ->requiresConfirmation()
                    ->color('danger'),
            ]);
    }

    public static function getLabel(): string
    {
        return 'Verifikasi Konten';
    }

    public static function getPluralLabel(): string
    {
        return 'Verifikasi Konten';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Manajemen Aplikasi';
    }

    public static function getPages(): array
    {
        return [
            'index' => \App\Filament\Resources\ContentResource\Pages\ListContents::route('/'),
        ];
    }
}
