<?php

use Illuminate\Database\Seeder;

class KurikulumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kurikulums')->insert([
          'deskripsi' => 'Di tahap awal (kelas 10), kami mengenalkan setiap murid ke mata pelajaran yang luas dan seimbang. Selain mata pelajaran inti Al Islam, Kemuhammadiyahan, Tartil, Bahasa Indonesia, Bahasa Inggris, Bahasa Arab, Bahasa Mandarin, PPKn, Matematika dan Ilmu Pengetahuan Alam, Ilmu Pengetahuan Sosial, murid diajarkan Seni, Sejarah, PKWU, Pendidikan Jasmani, Bimbingan Konseling. Beberapa murid juga belajar bahasa Jepang dan Sastra. 
          Pada Tahun kedua (kelas 11), kami berkonsultasi dengan murid dan orang tua mereka untuk membantu mereka memilih mata pelajaran sesuai minat ( lintas ). Kami menawarkan fleksibilitas pilihan mata pelajran lintas yang cukup dan banyak saran tentang cara terbaik untuk menyesuaikan subyek dengan kemampuan dan aspirasi masing-masing individu. Dengan cara itu kita bisa memastikan bahwa murid menjaga pintu tetap terbuka agar bisa terus mengejar ambisi mereka. 
          Pada tahap terakhir ( kelas 12), semua siswa mengikuti kurikulum inti Al Islam, Kemuhammadiyahan, Tartil, Bahasa Indonesia, Bahasa Inggris, Bahasa Arab, Matematika, Ilmu Pengetahuan Alam ( yang beberapa diantaranya diajarkan secara terpisah oleh guru spesialis). Siswa juga mendapatkan Ilmu Pengetahuan Sosial, Sejarah, PPKn, PKWU dan Pendidikan Jasmani. Kemudian, pada akhir tahun terakhr, mereka siap untuk mencapai hasil ujian nasional yang sangat baik – berkat perhatian yang diberikan kepada masing-masing siswa oleh guru berbakat kami. 
          Dalam aktivitas sehari-hari kita juga memperhatikan kebutuhan murid kita yang lebih luas. Kami mempromosikan nilai-nilai ahlak yang Islami, dan kami menawarkan kesempatan untuk mengembangkan keterampilan dan minat dalam kegiatan non-akademik dan ekstrakurikuler. Kami juga mendorong kualitas seperti komunikasi, kerja tim, disiplin dan kemandirian sehingga siswa kami dapat memanfaatkan manfaat pendidikan mereka dan menikmati kehidupan yang produktif dan bermanfaat di luar sekolah.
          ',
          'image' => ''
        ]);
    }
}
