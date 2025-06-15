<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KategoriBidang;

class KategoriBidangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            'Teknologi Informasi',
            'Kesehatan & Medis',
            'Pendidikan & Pelatihan',
            'Pertanian & Agribisnis',
            'Keuangan & Akuntansi',
            'Hukum',
            'Manufaktur & Produksi',
            'Transportasi & Logistik',
            'Pemasaran & Periklanan',
            'Pariwisata & Perhotelan',
            'Sumber Daya Manusia',
            'Seni & Desain',
            'Media & Komunikasi',
            'Konstruksi & Properti',
            'Energi & Pertambangan',
            'Retail & Penjualan',
            'Administrasi & Sekretaris',
        ];

        foreach ($data as $bidang) {
            KategoriBidang::create([
                'nama' => $bidang
            ]);
        }
    }
}
