<?php

namespace App\Filament\Resources\PerusahaanResource\Pages;

use App\Filament\Resources\PerusahaanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPerusahaans extends ListRecords
{
    protected static string $resource = PerusahaanResource::class;

    public static function canCreate(): bool
    {
        return false; // ✅ Hilangkan tombol Create User
    }
}
