<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = [
        'image',
        'title_en',
        'title_sw',
        'content_en',
        'content_sw',
        'is_active',
        'news_date',
    ];

    protected $casts = [
        'news_date' => 'date', // now news_date will be a Carbon instance
    ];
}
