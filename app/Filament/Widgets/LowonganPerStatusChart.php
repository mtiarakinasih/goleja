<?php

namespace App\Filament\Widgets;

use App\Models\Lowongan;
use Filament\Widgets\BarChartWidget;

class LowonganPerStatusChart extends BarChartWidget
{
    protected static ?string $heading = 'Lowongan per Status';
    protected string|int|array $columnSpan = 2;

    protected function getData(): array
    {
        $data = Lowongan::selectRaw('status, COUNT(*) as total')
            ->groupBy('status')
            ->pluck('total', 'status');

        return [
            'datasets' => [[
                'label' => 'Lowongan',
                'data' => $data->values(),
                'backgroundColor' => ['#facc15','#22c55e','#ef4444'],
            ]],
            'labels' => $data->keys(),
        ];
    }
}
