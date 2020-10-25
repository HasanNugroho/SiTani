<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [

        'email',
        'comment',
        'gambar',
        'post_id'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
