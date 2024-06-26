<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'role_id' => 1,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'name' => 'Aman Tairo',
            'role_id' => 2,
            'email' => 'tairo@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}