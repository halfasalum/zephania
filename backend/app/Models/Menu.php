<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';

    protected $fillable = [
        'name_en',
        'name_sw',
        'has_submenu',
        'status',
        'menu_path'
    ];
}
