<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;

    protected $fillable = [
        'perusahaan_id',
        'nama',
        'alamat',
        'kategori_bidang_id',
        'kategori_waktu_id',
        'gaji',
        'lokasi',
        'deskripsi',
        'foto',
        'status',
    ];

    // Relasi ke perusahaan
    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class);
    }

    // Relasi ke kategori bidang
    public function kategoriBidang()
    {
        return $this->belongsTo(KategoriBidang::class);
    }

    // Relasi ke kategori waktu
    public function kategoriWaktu()
    {
        return $this->belongsTo(KategoriWaktu::class);
    }
}
