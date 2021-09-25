<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PPDBTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('link_ppdbs')->insert([
            'link' => 'https://bit.ly/PPDBSMPM13'
          ]);
    }
}
