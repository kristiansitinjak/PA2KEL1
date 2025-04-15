<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramKerja extends Model
{
    use HasFactory;

    protected $fillable = [
        'kegiatan',
        'deskripsi',
        'tujuan',
        'tahap_pelaksanaan',
        'waktu_pelaksanaan',
        'tempat',
        'indikator',
        'kekuatan',
        'kelemahan',
        'perkiraan_biaya',
        'sumber_dana',
        'terlaksana'
    ];
}
