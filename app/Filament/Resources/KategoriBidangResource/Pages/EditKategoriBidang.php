<?php

namespace App\Filament\Resources\KategoriBidangResource\Pages;

use App\Filament\Resources\KategoriBidangResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriBidang extends EditRecord
{
    protected static string $resource = KategoriBidangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
