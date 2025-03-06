<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model {
    use HasFactory;

    protected $table = 'mahasiswas';
    protected $fillable = ['nama', 'nim', 'kelas', 'angkatan', 'status_pembayaran', 'status_approval'];
}
