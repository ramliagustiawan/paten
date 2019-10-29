<?php

use Illuminate\Database\Seeder;
use App\IJin;

class IjinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ijin::create([
            'nama' => 'IUMK',
            'controller' => 'iumk',
        ]);
    }
}
