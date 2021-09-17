<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BerandaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('berandas')->insert([
            'id' => 1,
            'imageBanner' => '',
            'imageSection2' => '',
            'imageSection3' => ''
            
        ]);
    }
}
