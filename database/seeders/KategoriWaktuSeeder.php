<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KategoriWaktu;

class KategoriWaktuSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            'Full Time',
            'Part Time',
            'Freelance',
            'Magang',
            'Remote',
        ];

        foreach ($data as $waktu) {
            KategoriWaktu::create([
                'nama' => $waktu
            ]);
        }
    }
}
