<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal',
        'lokasi',
        'photo',
        'program_kerja_id',
    ];
    public function pendaftar()
{
    return $this->hasMany(Pendaftar::class);
}

}
