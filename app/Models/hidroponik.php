<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hidroponik extends Model
{
    use HasFactory;
    protected $table = 'hidroponik';
    protected $fillable = [
        'kategori',
        'materi',
        'subbab',
        'mentor',
        'youtube',
        'ringkasan',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
