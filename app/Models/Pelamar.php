<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'alamat',
        'email',
        'tanggal_lahir',
        'no_telepon',
        'foto_profil',
        'pendidikan',
        'cv_file',
        'rating',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
