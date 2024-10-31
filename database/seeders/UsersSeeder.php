<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'Santuy',
            'name' => 'Admin Santuy',
            'slug' => Str::slug('Admin Santuy'),
            'email' => 'admin@gmail.com',
            'no_telp' => '0891237878129',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'status' => 'active',
            'role_id' => 1,
            'images' => ''
        ]);

        User::create([
            'first_name' => 'User',
            'last_name' => 'Santuy',
            'name' => 'User Santuy',
            'slug' => Str::slug('User Santuy'),
            'email' => 'user@gmail.com',
            'no_telp' => '0891237878129',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'status' => 'active',
            'role_id' => 3,
            'images' => ''
        ]);
    }
}
