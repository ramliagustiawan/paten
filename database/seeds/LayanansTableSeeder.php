<?php

use Illuminate\Database\Seeder;
use App\Layanan;

class LayanansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Layanan::create([
            'layanan' => 'IUMK',
        ]);

        Layanan::create([
            'layanan' => 'Surat Keterangan',
        ]);
    }
}
