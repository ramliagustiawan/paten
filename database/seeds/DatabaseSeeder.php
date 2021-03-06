<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(AdminUserSeeder::class);

        $this->call(LaporsTableSeeder::class);
        $this->call(IjinsTableSeeder::class);
        $this->call(NonijinsTableSeeder::class);

        $this->call(ServicesTableSeeder::class);
        $this->call(PejabatsTableSeeder::class);
        $this->call(LayanansTableSeeder::class);

        $this->call(PermissionsTableSeeder::class);
    }
}
