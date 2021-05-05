<?php

use Illuminate\Database\Seeder;

class AkreditasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('akreditasis')->insert([
            'deskripsi' => 'Kerja keras luar biasa yang dilakukan menjelang akreditasi sepertinya terbayar sudah ketika hasil akreditasi telah diumumkan oleh BAN (Badan Akreditasi Nasional) pada tanggal 27 Oktober 2015 dengan hasil yang tentunya sesuai harapan.

            SMP Muhammadiyah 13 terakreditasi A. Pencapaian peringkat A tersebut sanggat membahagiakan dan membanggakan karena bukanlah hal mudah untuk memperolehnya. Delapan standar nasional pendidikan yang dinilai dalam akreditasi yaitu, standar isi, standar proses, standar kompetensi lulusan, standar pendidik & tenaga kependidikan, standar sarana & prasarana, standar pembiayaan, standar pengelolaan, dan standar penilaian akhirnya berhasil di penuhi dengan baik
            
            Semoga dengan hasil ini SMP Muhammadiyah 13 Surabaya akan semakin maju dan berkembang karena tenyata
            SMP Muhammadiyah 13 telah diakui kelayakannya sebagai lembaga pendidikan yang berstandar sangat baik dengan Terakreditasi A. '
        ]);
    }
}
