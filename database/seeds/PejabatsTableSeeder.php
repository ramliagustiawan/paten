<?php

use Illuminate\Database\Seeder;
use App\Pejabat;

class PejabatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pejabat::create([
            'nama' => 'Sriyanti Ano, SP, M.Si',
            'jabatan' => 'Camat Dungingi',
            'nip' => '19690908 199203 2 011',
        ]);

        Pejabat::create([
            'nama' => 'Ramli A. Taliki, SSTP',
            'Jabatan' => 'a.n. Camat Dungingi',
            'ketjabatan' => 'Sekretaris Kecamatan',
            'nip' => '19840813 200312 1 002',
        ]);

        Pejabat::create([
            'nama' => 'Hj. Harni Mahmud, S.AP',
            'Jabatan' => 'a.n. Camat Dungingi',
            'ketjabatan' => 'Kepala Seksi Pemerintahan',
            'nip' => '19671121 200701 2 013',
        ]);

        Pejabat::create([
            'nama' => 'Agumiaty Sulila, SP, M.Si',
            'Jabatan' => 'a.n. Camat Dungingi',
            'ketjabatan' => 'Kepala Seksi PMK',
            'nip' => '19670805 200003 2 004',
        ]);

        Pejabat::create([
            'nama' => 'Syamsudin Abdullah, S.IP',
            'Jabatan' => 'a.n. Camat Dungingi',
            'ketjabatan' => 'Kepala Seksi Ekbang',
            'nip' => '19760213 200103 1 001',
        ]);

        Pejabat::create([
            'nama' => 'Jasdy Biga, SE',
            'Jabatan' => 'a.n. Camat Dungingi',
            'ketjabatan' => 'Kepala Seksi Trantibum',
            'nip' => '19660526 201001 1 001',
        ]);

        Pejabat::create([
            'nama' => 'Jeaneth M. Djafar, SE',
            'Jabatan' => 'a.n. Camat Dungingi',
            'ketjabatan' => 'Kasubag KUK',
            'nip' => '19770106 200604 2 015',
        ]);

        Pejabat::create([
            'nama' => 'Marlin Bobihu, SE',
            'Jabatan' => 'a.n. Camat Dungingi',
            'ketjabatan' => 'Kasubag Program',
            'nip' => '19750107 199402 2 001',
        ]);
    }
}
