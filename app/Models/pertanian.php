<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pertanian extends Model
{
    use HasFactory;
    protected $table = 'pertanian';
    protected $fillable = [
        'kategori',
        'materi',
        'judul',
        'mentor',
        'youtube',
        'ringkasan',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
