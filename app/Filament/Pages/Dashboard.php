<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\TotalPelamarOverview;
use App\Filament\Widgets\TotalPerusahaanOverview;
use App\Filament\Widgets\LowonganPerKategoriBidangChart;
use App\Filament\Widgets\LowonganPerKategoriWaktuChart;
use App\Filament\Widgets\LowonganPerStatusChart;

class Dashboard extends BaseDashboard
{
    public function getHeaderWidgets(): array
    {
        return [
            TotalPelamarOverview::class,
            TotalPerusahaanOverview::class,
        ];
    }

    public function getWidgets(): array
    {
        return [
            LowonganPerKategoriBidangChart::class,
            LowonganPerKategoriWaktuChart::class,
            LowonganPerStatusChart::class,
        ];
    }
}
