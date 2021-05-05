<?php

use Illuminate\Database\Seeder;

class VisiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visis')->insert([
            'visi' => 'SMP Muhammadiyah 13 Unggul dalam IMTAQ, IPTEK, Berprestasi, dan Berbudaya Lingkungan. Indikator visi:
            1. Terwujudnya peran sekolah sebagai pembentuk karakter peserta didik
            2. Terciptanya peserta didik yang beriman yang menjalankan seluruh
            kegiatan berdasarkan syariat islam
            3. Terciptanya peserta didik yang dapat menjalankan ibadah wajib dengan kesadaran diri
            4. Terciptanya peserta didik yang berkepribadian santun, sopan, jujur, bertanggung jawab, disiplin, percaya diri, dan mandiri
            5. Terciptanya peserta didik yang cerdas, kreatif dan inovatif
            6. Terciptanya peserta didik yang memiliki wawasan luas terhadap informasi dan teknologi
            7. Terwujudnya generasi islam yang mampu mandiri dan bersaing menghadapi persaingan global
            8. Terciptanya peserta didik yang peduli dan mau menjaga kebersihan lingkungan dimanapun mereka berada',
            'misi' => '1. Mewujudkan iklim sekolah yang disiplin dan islami
            2. Menciptakan peserta didik yang beriman dan bertaqwa
            3. Menciptakan peserta didik yang berakhlaqul karimah
            4. Mewujudkan peserta didik yang berkepribadian santun, sopan, jujur, bertanggung jawab, disiplin, percaya diri, dan mandiri
            5. Mewujudkan peserta didik yang cerdas, kreatif dan inovatif
            6. Menciptakan peserta didik yang memiliki kompetensi dalam penguasaan iptek
            7. Mewujudkan generasi islam yang mandiri dan kompetitif dalam menghadapi persaingan global
            8. Menciptakan peserta didik yang berbudaya lingkungan'
        ]);
    }
}
