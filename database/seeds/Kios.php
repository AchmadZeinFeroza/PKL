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
            'alamat' => 'Dusun Bringin Sari Desa Jati Mulyo Kecamatan Jenggawah',
            'pemilik' => 'Sukisman',
            'kecamatan' => 1,
            'desa' => 'Klompangan',
            'no_telpon' => '081249033317',
            'kode' => 'RT000002983',
            'spjb' => '023',
            ]);
    }
}
