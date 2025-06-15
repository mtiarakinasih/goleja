<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'content',
        'image',
        'status',
    ];

    protected $casts = [
        'type' => 'string',
        'status' => 'string',
    ];
}
