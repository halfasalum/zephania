<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
protected $table = 'about_us';

    protected $fillable = [
        'header_en',
        'header_sw',
        'contents_en',
        'contents_sw',
        'item1_header_en',
        'item1_header_sw',
        'item1_subheader_en',
        'item1_subheader_sw',
        'item2_header_en',
        'item2_header_sw',
        'item2_subheader_en',
        'item2_subheader_sw',
        'experience',
        'image_front',
        'image_back',
    ];
}
