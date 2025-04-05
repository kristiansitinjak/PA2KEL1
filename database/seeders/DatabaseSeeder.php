<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
{
    // 1. Tambah role dasar
    DB::table('roles')->insert([
        ['role_name' => 'bph'],
        ['role_name' => 'pembina'],
        ['role_name' => 'mahasiswa']
    ]);

    // 2. Buat akun admin/Kaprodi manual
    DB::table('users')->insert([
        'username' => 'pembina',
        'password_hash' => bcrypt('pembina123'),
        'prodi' => null,
        'is_from_api' => false
    ]);

    // 3. Assign role kaprodi
    DB::table('organization_members')->insert([
        'user_id' => 1, // ID user kaprodi
        'role_id' => 2, // ID role kaprodi
        'is_bph' => false
    ]);
}
}
