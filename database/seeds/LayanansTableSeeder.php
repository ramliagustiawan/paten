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
            'kategori' => 'Perijinan',
            'biaya' => 'Gratis',
            'waktu' => '30 Menit Setelah Berkas Lengkap',
            'syarat' => 'KTP,
                         SKU kelurahan,
                         Pas Photo 4X6 Warna,
                         Mengisi Formulir,
                         Bukti Pelunasan PBB.    ',
            'ket' => ''
        ]);

        Layanan::create([
            'layanan' => 'Surat Keterangan',
            'kategori' => 'Non Perijinan',
            'biaya' => 'Gratis',
            'waktu' => '15 Menit Setelah Berkas Lengkap',
            'syarat' => 'KTP
                         Bukti Pelunasan PBB    ',
            'ket' => ''
        ]);
    }
}
