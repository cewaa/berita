<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Membuat akun admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'), // Password yang dienkripsi
            'role' => 'admin', // Pastikan ada kolom 'role' di tabel users
        ]);

        // Membuat akun user biasa
        User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => Hash::make('password123'), // Password yang dienkripsi
            'role' => 'user', // Pastikan ada kolom 'role' di tabel users
        ]);
    }
}
