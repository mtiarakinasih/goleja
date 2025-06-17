<?php

namespace App\Filament\Resources\LowonganResource\Pages;

use App\Filament\Resources\LowonganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLowongans extends ListRecords
{
    protected static string $resource = LowonganResource::class;

    public static function canCreate(): bool
    {
        return false; // ✅ Hilangkan tombol Create User
    }
}
