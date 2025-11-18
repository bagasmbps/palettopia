<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // Cek apakah admin sudah ada
        $email = 'admin@example.com';
        if (! User::where('email', $email)->exists()) {
            User::create([
                'name' => 'Administrator',
                'email' => $email,
                'phone' => '081234567890',
                'password' => Hash::make('password123'), // ganti dengan password lebih aman
                'role' => 'admin',
            ]);
        }
    }
}
