<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'nama',
        'nim',
        'angkatan',
        'email',
        'hadir', // nanti buat absensi
    ];
}
