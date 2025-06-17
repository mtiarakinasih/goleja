<?php

namespace App\Filament\Widgets;

use App\Models\Lowongan;
use Filament\Widgets\BarChartWidget;

class LowonganPerKategoriWaktuChart extends BarChartWidget
{
    protected static ?string $heading = 'Lowongan per Waktu';
    protected string|int|array $columnSpan = 2;

    protected function getData(): array
    {
        $data = Lowongan::join('kategori_waktus','kategori_waktus.id','lowongans.kategori_waktu_id')
            ->selectRaw('kategori_waktus.nama as k, count(*) as total')
            ->groupBy('kategori_waktus.nama')
            ->pluck('total','k');

        return [
            'datasets'=> [[
                'label'=>'Lowongan',
                'data'=>$data->values(),
                'backgroundColor'=>collect($data)->map(fn($_)=> '#6366f1')->toArray(),
            ]],
            'labels'=>$data->keys(),
        ];
    }
}
