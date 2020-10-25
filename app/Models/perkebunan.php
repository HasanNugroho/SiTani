<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perkebunan extends Model
{
    use HasFactory;
    protected $table = 'perkebunan';
    protected $fillable = [
        'slug',
        'post_id',
        'materi_ke',
        'kategori',
        'bab',
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
