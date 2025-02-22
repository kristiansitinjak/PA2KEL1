<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'members'; // Nama tabel

    protected $fillable = [
        'name',
        'position',
        'phone',
        'email',
        'photo',
    ];
}
