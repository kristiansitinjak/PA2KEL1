<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'nim', 'name', 'email', 'role'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
