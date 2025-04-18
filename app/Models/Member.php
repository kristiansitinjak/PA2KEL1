<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'jabatan', 'phone', 'email', 'category_id', 'photo'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    
}