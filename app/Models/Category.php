<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Relasi: Kategori bisa memiliki banyak anggota
    public function members()
    {
        return $this->hasMany(Member::class);
    }
}
