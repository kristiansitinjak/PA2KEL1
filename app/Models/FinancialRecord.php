<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinancialRecord extends Model
{
    protected $fillable = ['tanggal', 'keterangan', 'jenis', 'jumlah'];
}
