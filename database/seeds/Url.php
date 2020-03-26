<?php

use Illuminate\Database\Seeder;

class Url extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('url')->insert([
            'facebook' => 'https://www.facebook.com/achmad.feroza',            
            'instagram' => 'https://www.instagram.com/achmadferoza/',            
            'twitter' => 'https://www.instagram.com/achmadferoza/',            
            'wa' => '081249033315',            
            'no_perusahaan' => '03312938847',            
        ]);
    }
}
