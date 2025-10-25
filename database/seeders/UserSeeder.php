<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User Desa
        User::create([
            'name' => 'Admin Desa',
            'email' => 'desa@pakkades.com',
            'password' => Hash::make('password'),
            'role' => 'desa',
            'nama_desa' => 'Desa Contoh',
            'nama_kecamatan' => 'Kecamatan Contoh'
        ]);

        // User Kecamatan
        User::create([
            'name' => 'Admin Kecamatan',
            'email' => 'kecamatan@pakkades.com',
            'password' => Hash::make('password'),
            'role' => 'kecamatan',
            'nama_desa' => null,
            'nama_kecamatan' => 'Kecamatan Contoh'
        ]);

        // User Kabupaten
        User::create([
            'name' => 'Admin Kabupaten',
            'email' => 'kabupaten@pakkades.com',
            'password' => Hash::make('password'),
            'role' => 'kabupaten',
            'nama_desa' => null,
            'nama_kecamatan' => null
        ]);

        // Buat 10 user desa dummy
        for ($i = 1; $i <= 10; $i++) {
            User::create([
                'name' => "Admin Desa $i",
                'email' => "desa$i@pakkades.com",
                'password' => Hash::make('password'),
                'role' => 'desa',
                'nama_desa' => "Desa Contoh $i",
                'nama_kecamatan' => 'Kecamatan Contoh'
            ]);
        }
    }
}