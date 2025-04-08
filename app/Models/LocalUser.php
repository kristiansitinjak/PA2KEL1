<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'nama',
        'nim',
        'angkatan',
        'prodi',
        'role',
        'password', 
    ];
    
}
