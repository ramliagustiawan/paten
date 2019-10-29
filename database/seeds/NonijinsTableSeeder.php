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
            'controller' => 'Surat Untuk Keperluan Nikah',
        ]);

        Nonijin::create([
            'nama' => 'Surat Keterangan',
            'controller' => 'Surat Keterangan sesuai Kebutuhan Masyarakat',
        ]);
    }
}
