<?php

namespace App\Filament\Widgets;

use App\Models\Perusahaan;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TotalPerusahaanOverview extends StatsOverviewWidget
{
    protected string|int|array $columnSpan = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Perusahaan', Perusahaan::count())
                ->description('Jumlah perusahaan yang terdaftar')
                ->icon('heroicon-o-building-office')
                ->color('success'),
        ];
    }
}
