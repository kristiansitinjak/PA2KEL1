<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = ['Badan Pengurus Harian', 'Dokumentasi', 'Pendidikan', 'Acara', 'Kompetisi','Sarana Sosial', 'Hubungan Masyarakat'];
        
        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
