<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBidang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
    ];

    public function lowongans()
    {
        return $this->hasMany(Lowongan::class, 'kategori_bidang_id');
    }
}
