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
        ]);
        DB::table('posisi')->insert([
            'posisi' => 'Bendahara',            
        ]);
        DB::table('posisi')->insert([
            'posisi' => 'Kepala Gudang',            
        ]);
    }
}
