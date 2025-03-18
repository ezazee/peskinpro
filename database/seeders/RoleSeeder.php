<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'Administrator'],
            ['name' => 'Management'],
            ['name' => 'user'],
            ['name' => 'Admin'],
            ['name' => 'Finance'],
            ['name' => 'Writter'],
            ['name' => 'Affiliate'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
