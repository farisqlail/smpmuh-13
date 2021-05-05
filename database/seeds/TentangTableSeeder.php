<?php

use Illuminate\Database\Seeder;

class TentangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tentangs')->insert([
            'deskripsi' => 'SMP Muhammadiyah 13 Surabaya berdiri sejak 1 Juli 1983 yang beralamatkan di Jl. Tambak Segaran No. 27 Surabaya, belakang KAZA (Kapas Krampung Plaza).

            SMP Muhammadiyah 13 Surabaya adalah sekolah yang memadukan nilai-nilai tauhid ke seluruh kurikulum dan aktivitasnya, yang terus menerus disempurnakan untuk membangun paradigma pendidikan yang ideal.
            Kita percaya bahwa solusi terbaik bagi pendidikan anak-anak adalah pendidikan yang didasari oleh nilai-nilai tauhid. Dengan cara itu, anak-anak diharapkan memiliki akidah yang kokoh, beribadah secara benar dan berakhlak mulia.
            
            SMP Muhammadiyah 13 Surabaya hadir untuk memberikan solusi terbaik bagi generasi pelanjut dengan pendidikan yang menumbuhkembangkan potensi fitrah; yang meliputi aspek akal, spiritual, fisik, sosial secara optimal dan berimbang.
            
            SMP Muhammadiyah 13 Surabaya mengintegrasikan keyakinan, pikiran dan tindakan ke dalam lingkungan belajar; baik di sekolah, masjid, keluarga dan masyarakat secara seimbang sehingga akan melahirkan lulusan yang berkualitas, cerdas, kreatif dan siap menghadapi tantangan ke depan serta memberikan pondasi pembentukan manusia seutuhnya, yakni manusia yang beriman, bertaqwa, menguasai IPTEK, berakhlak mulia, cerdas menuju ridha Allah SWT. ',
            'namaKarakter' => '',
            'deskripsiKarakter' => ''
        ]);
    }
}
