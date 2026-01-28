<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuditLog extends Model
{
 protected $fillable = [
        'user_id',
        'action',
        'module',
        'ip_address',
        'user_agent',
        'payload'
    ];

    protected $casts = [
        'payload' => 'array'
    ];
}
