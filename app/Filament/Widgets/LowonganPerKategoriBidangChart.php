<?php

namespace App\Filament\Widgets;

use App\Models\Lowongan;
use Filament\Widgets\BarChartWidget;

class LowonganPerKategoriBidangChart extends BarChartWidget
{
    protected static ?string $heading = 'Lowongan per Bidang';
    protected string|int|array $columnSpan = 2;

    protected function getData(): array
    {
        $data = Lowongan::join('kategori_bidangs','kategori_bidangs.id','lowongans.kategori_bidang_id')
            ->selectRaw('kategori_bidangs.nama as k, count(*) as total')
            ->groupBy('kategori_bidangs.nama')
            ->pluck('total','k');

        return [
            'datasets' => [[
                'label'=>'Lowongan',
                'data'=>$data->values(),
                'backgroundColor'=>collect($data)->map(fn($_)=> '#3b82f6')->toArray(),
            ]],
            'labels'=>$data->keys(),
        ];
    }
}
