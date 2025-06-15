<?php

namespace App\Filament\Resources\KategoriWaktuResource\Pages;

use App\Filament\Resources\KategoriWaktuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriWaktus extends ListRecords
{
    protected static string $resource = KategoriWaktuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
