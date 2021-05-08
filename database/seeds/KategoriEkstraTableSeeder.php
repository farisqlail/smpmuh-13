<?php

use Illuminate\Database\Seeder;

class KategoriEkstraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori_ekstras')->insert([
            ['nama_kategori' => 'Olimpiade'],
            ['nama_kategori' => 'Kesenian'],
            ['nama_kategori' => 'Olahraga'],
            ['nama_kategori' => 'Kebahasaan'],
            ['nama_kategori' => 'Keagamaan']
        ]);
    }
}
