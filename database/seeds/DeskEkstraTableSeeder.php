<?php

use Illuminate\Database\Seeder;

class DeskEkstraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('desk_ekstras')->insert([
            'deskripsi' => '
            Kegiatan ekstrakurikuler merupakan salah satu alat pengenalan siswa pada hubungan sosial. Di dalamnya terdapat pendidikan pengenalan diri dan pengembangan kemampuan selain pemahaman materi pelajaran. Berangkat dari pemikiran tersebut, di SMP Muhammadiyah 13 Surabaya mempunyai berbagai kegiatan ekstrakurikuler antara lain Ekstrakulikuler Wajib dan Ekstrakulikuer Pilihan.
            
            Untuk Yang Wajib yaitu
            
            1. Tapak Suci
            2. Hizbul Wathan
            '
        ]);
    }
}
