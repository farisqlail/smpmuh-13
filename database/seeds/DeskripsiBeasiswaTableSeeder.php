<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeskripsiBeasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deskripsi_beasiswas')->insert([
            'image' => '',
            'keterangan' => 'Lorem Ipsum is simply',
        ]);
    }
}
