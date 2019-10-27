<?php

use Illuminate\Database\Seeder;
use App\Report;

class LaporsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Report::create([
            'name' => 'Masyarakat',
            'alamat' => 'jalan Apel Kelurahan Huangobotu',
            'kontak' => '08123456789',
            'pesan' => 'pengurusan surat Lama',
            'tindakan' => 'Cek dan Beri penjelasan printer rusak',
            'aparat' => 'Sekcam',
            'ket' => 'Selesai',
        ]);
    }
}
