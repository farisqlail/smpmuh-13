<?php

use Illuminate\Database\Seeder;

class BeasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beasiswas')->insert([
            [
                'namaBeasiswa' => 'Beasiswa Prestasi',
                'deskripsi' => 'Beasiswa ini kami berikan untuk siswa yang berprestasi atau yang mendapatkan peringkat 1 dikelas.'
            ],
            [
                'namaBeasiswa' => 'Beasiswa Siswa Miskin (BSM)',
                'deskripsi' => 'Beasiswa ini berasal dari pemerintah yang diberikan untuk siswa yang mempunyai Kartu Perlindungan Sosial (KPS)'
            ],
            [
                'namaBeasiswa' => 'Beasiswa Untuk Siswa Tidak Mampu',
                'deskripsi' => 'Beasiswa ini diberikan untuk siswa yang kurang mampu bahkan kita membebaskan biaya SPP untuk siswa yang tidak mampu tapi selalu berprestasi. )'
            ],
        ]);
    }
}
