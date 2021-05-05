<?php

use Illuminate\Database\Seeder;

class KarakterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('karakters')->insert([
                [
                    'namaKarakter' => 'Karakter Spiritual KeIslaman',
                    'deskripsiKarakter' => '1. Tumbuh kesadaran menjalankan sholat dan ibadah sunnah sehari-hari
                    2. Senang dan terampil membaca Al-Quran serta hafal juz 30
                    3. Memiliki pemahaman Islamiyah yang benar
                    4. Memiliki bekal ilmu agama '
                ],
                [
                    'namaKarakter' => 'Karakter Pembelajar',
                    'deskripsiKarakter' => '1. Tumbuh minat yang tinggi untuk mengerti dan senang belajar
                    2. Gemar membaca dan menulis
                    3. Lulus Ujian Nasional dengan nilai yang baik
                    4. Berfikir logis, kritis dan analitis
                    5. Memiliki kesiapan memasuki jenjang pendidikan berikutnya '
                ],
                [
                    'namaKarakter' => 'Karakter Life skill',
                    'deskripsiKarakter' => '1. Mampu menghasilkan karya sesuai dengan bakat dan minat siswa
                    2. Terampil bergaul dan berkomunikasi
                    3. Mandiri dalam mengurus diri sendiri '
                ]
            ]);
    }
}
