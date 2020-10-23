<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hidroponik extends Model
{
    use HasFactory;
    protected $table = 'hidroponik';
    protected $fillable = [
        'slug',
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
