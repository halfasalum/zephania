<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageStats extends Model
{
    protected $table = 'page_stats';
    protected $fillable = [
        'project_done',
        'happy_clients',
        'expert_staff',
        'win_awards',
    ];
}
