<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'nama' => 'Masyarakat',
            'layanan' => 'iumk',
            'kontak' => '08123456789',
            'kelurahan' => 'Libuo',
            'alamat' => 'jalan duku',
            'nik' => '123456789',
            'ttl' => '1984-08-13',
            'jk' => 'laki-laki',
            'negara' => 'indonesia',
            'kerja' => 'Asn',
            'agama' => 'islam',
        ]);

        Service::create([
            'nama' => 'Masyarakat',
            'layanan' => 'iumk',
            'kontak' => '08123456789',
            'kelurahan' => 'Libuo',
            'alamat' => 'jalan duku',
            'nik' => '123456789',
            'ttl' => '1984-08-13',
            'jk' => 'laki-laki',
            'negara' => 'indonesia',
            'kerja' => 'Asn',
            'agama' => 'islam',
            'naper' => 'PT Cengkeh',
        ]);
    }
}
