<?php

use Illuminate\Database\Seeder;
use App\Nonijin;

class NonijinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nonijin::create([
            'nama' => 'Dispensasi Nikah',
            'controller' => 'nikah',
        ]);

        Nonijin::create([
            'nama' => 'Surat Keterangan',
            'controller' => 'suket',
        ]);
    }
}
