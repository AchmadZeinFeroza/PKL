<?php

use Illuminate\Database\Seeder;

class Kios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kios')->insert([
            'nama_kios' => 'UD Widda Jaya',
            'pemilik' => 'Sukisman',
            'alamat' => 'Dusun Bringin Sari Desa Jati Mulyo Kecamatan Jenggawah',
            ]);
        DB::table('kios')->insert([
            'nama_kios' => 'UD Tani Harapan',
            'pemilik' => 'Rahmad Basuki',
            'alamat' => 'Desa Wonojati Kecamatan Jenggawah',
            ]);
    }
}
