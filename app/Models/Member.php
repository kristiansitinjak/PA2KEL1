<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'email', 'category_id', 'photo'];

    // Relasi: Member memiliki satu kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
