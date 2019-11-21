<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin Paten',
            'email' => 'admin@paten.com',
            'password' => bcrypt('12345678'),
            'roles_id' => '1',
            'email_verified_at' => now()
        ]);
        $user->assignRole('admin');
    }
}
