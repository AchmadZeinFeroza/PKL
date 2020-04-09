<?php

use Illuminate\Database\Seeder;

class Posisi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posisi')->insert([
            'posisi' => 'Manager',            
            'deskripsi' => 'Mengatur keuangan dalam Perusahaan Perdagangan Indonesia cabang Jember',            
        ]);
        DB::table('posisi')->insert([
            'posisi' => 'Bendahara',            
            'deskripsi' => 'Mengatur keuangan dalam Perusahaan Perdagangan Indonesia cabang Jember',            
        ]);
        DB::table('posisi')->insert([
            'posisi' => 'Kepala Gudang',            
            'deskripsi' => 'Mengatur keuangan dalam Perusahaan Perdagangan Indonesia cabang Jember',            
        ]);
    }
}
