<?php

use Illuminate\Database\Seeder;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => 'Solihin',
            'email' => 'manager@gmail.com',
            'role' => 1,
            'password' => Hash::make('123123'),
            'nik' => '321123321',
            'alamat' => 'Sumberejo',
        ]);
        DB::table('users')->insert([
            'name' => 'Bu Jum',
            'email' => 'jum@gmail.com',
            'role' => 2,
            'nik' => '321123321',
            'password' => Hash::make('123123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Pak Yudhi',
            'email' => 'yudhi@gmail.com',
            'role' => 3,
            'nik' => '321123321',
            'password' => Hash::make('123123'),
        ]);
    }
}
