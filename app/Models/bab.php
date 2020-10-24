<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bab extends Model
{
    use HasFactory;
    protected $tables = 'bab';
    protected $fillable = [
        'slug',
        'kategori',
        'judul_bab',
        'mentor',
        'gambar',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
