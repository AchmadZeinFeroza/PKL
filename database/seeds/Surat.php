<?php

use Illuminate\Database\Seeder;

class Surat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surat')->insert([
            'surat' => 'spjb',
            'tanggal_cetak' => null,
            'user' => null,
            'cetak' => 0,
        ]);
        DB::table('surat')->insert([
            'surat' => 'penunjukan',
            'tanggal_cetak' => null,
            'user' => null,
            'cetak' => 0,
        ]);
    }
    
}
