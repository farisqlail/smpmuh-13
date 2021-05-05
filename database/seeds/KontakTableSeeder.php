<?php

use Illuminate\Database\Seeder;

class KontakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kontaks')->insert([
            'email' => 'smpm13sby@gmail.com',
            'telp' => '08988989',
            'alamat' => 'Jl. Tambak Segaran No. 27 Surabaya'
        ]);
    }
}
