<?php

use Illuminate\Database\Seeder;

class KegiatanPenunjangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kegiatan_penunjangs')->insert([
            ['nama_kegiatan' => 'KTS'],
            ['nama_kegiatan' => 'Factory visit'],
            ['nama_kegiatan' => 'Syiar Ramadhan'],
            ['nama_kegiatan' => 'Mabit (Malam, Bina, Iman & Takwa)'],
            ['nama_kegiatan' => 'Sosial Kemasyarakatan'],
            ['nama_kegiatan' => 'Tadabur Alam'],
            ['nama_kegiatan' => 'Enterpreneurship'],
            ['nama_kegiatan' => 'Super Camp'],
            ['nama_kegiatan' => 'LDKS'],
            ['nama_kegiatan' => 'Study Excursion'],
        ]);
    }
}
