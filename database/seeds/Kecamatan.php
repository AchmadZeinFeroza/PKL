<?php

use Illuminate\Database\Seeder;

class Kecamatan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kecamatan')->insert([
            'kecamatan' => 'Ajung',            
        ]);
        DB::table('kecamatan')->insert([
            'kecamatan' => 'Jenggawah',            
        ]);
        DB::table('kecamatan')->insert([
            'kecamatan' => 'Mumbulsari',            
        ]);
        DB::table('kecamatan')->insert([
            'kecamatan' => 'Silo',            
        ]);
    }
}
