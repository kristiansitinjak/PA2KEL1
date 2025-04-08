<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LocalUser;
use Illuminate\Support\Facades\Hash;

class LocalUserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'username' => 'adminlocal',
                'nama' => 'Admin Lokal',
                'password' => Hash::make('admin12345'),
                'role' => 'admin',
            ],
            [
                'username' => 'bendahara1',
                'nama' => 'Bendahara Contoh',
                'password' => Hash::make('bendahara123'),
                'role' => 'bendahara',
            ],
        ];

        foreach ($users as $user) {
            LocalUser::updateOrCreate(
                ['username' => $user['username']],
                array_merge($user, [
                    'nim' => null,
                    'angkatan' => null,
                    'prodi' => null,
                ])
            );
        }
    }
}
