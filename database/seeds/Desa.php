<?php

use Illuminate\Database\Seeder;

class Desa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('desa')->insert([
            'desa' => 'Klompangan',
            'kecamatan' => 1,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Mangaran',
            'kecamatan' => 1,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Pancakarya',
            'kecamatan' => 1,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Rowo Indah',
            'kecamatan' => 1,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Sukamakmur',
            'kecamatan' => 1,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Wirowongso',
            'kecamatan' => 1,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Wonojati',
            'kecamatan' => 2,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Kertonegoro',
            'kecamatan' => 2,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Kemuningsari Kidul',
            'kecamatan' => 2,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Sruni',
            'kecamatan' => 2,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Jatisari',
            'kecamatan' => 2,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Jatimulyo',
            'kecamatan' => 2,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Cangkring',
            'kecamatan' => 2,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Jenggawah',
            'kecamatan' => 2,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Karang Kedawung',
            'kecamatan' => 3,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Lengkong',
            'kecamatan' => 3,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Lempeji',
            'kecamatan' => 3,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Kawangrejo',
            'kecamatan' => 3,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Mumbulsari',
            'kecamatan' => 3,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Tamansari',
            'kecamatan' => 3,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Suco',
            'kecamatan' => 3,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Garahan',
            'kecamatan' => 4,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Karangharjo',
            'kecamatan' => 4,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Harjomulyo',
            'kecamatan' => 4,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Mulyorejo',
            'kecamatan' => 4,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Pace',
            'kecamatan' => 4,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Sempolan',
            'kecamatan' => 4,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Sidomulyo',
            'kecamatan' => 4,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Silo',
            'kecamatan' => 4,
        ]);
        DB::table('desa')->insert([
            'desa' => 'Sumberjati',
            'kecamatan' => 4,
        ]);
    }
}
