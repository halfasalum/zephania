<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhyUs extends Model
{
    protected $table = 'why_us';

    protected $fillable = [
        'header_en',
        'header_sw',
        'sub_header_en',
        'sub_header_sw',
        'item1_header_en',
        'item1_header_sw',
        'item1_sub_header_en',
        'item1_sub_header_sw',
        'item2_header_en',
        'item2_header_sw',
        'item2_sub_header_en',
        'item2_sub_header_sw',
        'item3_header_en',
        'item3_header_sw',
        'item3_sub_header_en',
        'item3_sub_header_sw',
        'image_front',
        'image_back',
    ];
}
