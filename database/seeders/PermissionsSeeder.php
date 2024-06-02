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
            'model' => 'User',
            'action' => 'create'
        ]);
        Permission::create([
            'model' => 'User',
            'action' => 'read'
        ]);
        Permission::create([
            'model' => 'User',
            'action' => 'update'
        ]);
        Permission::create([
            'model' => 'User',
            'action' => 'delete'
        ]);
        Permission::create([
            'model' => 'Post',
            'action' => 'create'
        ]);
        Permission::create([
            'model' => 'Post',
            'action' => 'read'
        ]);
        Permission::create([
            'model' => 'Post',
            'action' => 'update'
        ]);
        Permission::create([
            'model' => 'Post',
            'action' => 'delete'
        ]);
    }
}