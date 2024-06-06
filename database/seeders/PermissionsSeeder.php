<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create([
            'name' => 'create_users',
            'guard_name' => 'web'
        ]);
        Permission::create([
            'name' => 'read_users',
            'guard_name' => 'web'
        ]);
        Permission::create([
            'name' => 'update_users',
            'guard_name' => 'web'
        ]);
        Permission::create([
            'name' => 'delete_users',
            'guard_name' => 'web'
        ]);
        Permission::create([
            'name' => 'create_posts',
            'guard_name' => 'web'
        ]);
        Permission::create([
            'name' => 'read_posts',
            'guard_name' => 'web'
        ]);
        Permission::create([
            'name' => 'update_posts',
            'guard_name' => 'web'
        ]);
        Permission::create([
            'name' => 'delete_posts',
            'guard_name' => 'web'
        ]);
    }
}