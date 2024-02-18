<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'user_id',
        'name',
        'text',
        'code',
        'likes_count',
        'image'
    ];
}
