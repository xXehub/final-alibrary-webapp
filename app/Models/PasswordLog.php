<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordLog extends Model
{
    protected $fillable = [
        'user_id',
        'changed_at',
        'action',
        'new_password',
    ];

    public $timestamps = false; // Disable the default timestamps if you don't need created_at and updated_at
}
