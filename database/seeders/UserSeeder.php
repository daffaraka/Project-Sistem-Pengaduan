<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'nip' => rand(100000,200000),
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'status' => 'AKTIF'
        ]);

        User::create([
            'name' => 'User',
            'nip' => rand(100000,200000),
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'status' => 'AKTIF'

        ]);
    }
}
