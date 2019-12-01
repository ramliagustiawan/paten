<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'delete',
            'guard_name' => 'web'
        ]);

        Permission::create([
            'name' => 'edit',
            'guard_name' => 'web'
        ]);

        Permission::create([
            'name' => 'create',
            'guard_name' => 'web'
        ]);

        Permission::create([
            'name' => 'show',
            'guard_name' => 'web'
        ]);
    }
}
