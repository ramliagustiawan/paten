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
            'Jabatan' => 'Camat Dungingi',
            'nip' => '19690908 199203 2 011',
        ]);

        Pejabat::create([
            'nama' => 'Ramli A. Taliki, SSTP',
            'Jabatan' => 'a.n. Camat Dungingi',
            'nip' => '19840813 200312 1 002',
        ]);
    }
}
