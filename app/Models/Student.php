<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['nama_mahasiswa', 'nim'];

    public function payment()
{
    return $this->hasOne(Payment::class);
}
}

