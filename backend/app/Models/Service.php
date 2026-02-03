<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'our_service';
    protected $fillable = [
        'header_en',
        'header_sw',
        'icon',
        'sub_header_en',
        'sub_header_sw',
        'description_en',
        'description_sw',
        'is_active'
    ];
}
