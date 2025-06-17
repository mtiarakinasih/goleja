<?php

namespace App\Filament\Widgets;

use App\Models\Pelamar;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TotalPelamarOverview extends StatsOverviewWidget
{
    protected string|int|array $columnSpan = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Pelamar', Pelamar::count())
                ->description('Jumlah pelamar yang terdaftar')
                ->icon('heroicon-o-user-group')
                ->color('info'),
        ];
    }
}
