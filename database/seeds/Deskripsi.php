<?php

use Illuminate\Database\Seeder;

class Deskripsi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deskripsi_posisi')->insert([
            'posisi' => 'manager',            
            'deskripsi' => 'Pemimpin di Perusahaan Perdagangan Indonesia cabang Jember , bertanggung jawab atas seluruh kegiatan perusahaan ini',            
        ]);
        DB::table('deskripsi_posisi')->insert([
            'posisi' => 'bendahara',            
            'deskripsi' => 'Mengatur keuangan dalam Perusahaan Perdagangan Indonesia cabang Jember',            
        ]);
        DB::table('deskripsi_posisi')->insert([
            'posisi' => 'kepala gudang',            
            'deskripsi' => 'Tes Kepala Gudang',            
        ]);
        
    }
}
