<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experts extends Model
{
    protected $table = 'experts';
    protected $fillable = [
        'image_path',
        'name',
        'status',
        'designation'
    ];
}
