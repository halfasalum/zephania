<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelcomeNote extends Model
{
    use HasFactory;

    protected $table = 'welcome_note';

    protected $fillable = [
        'title_en',
        'title_sw',
        'content_en',
        'content_sw',
        'image_path',
    ];
}
