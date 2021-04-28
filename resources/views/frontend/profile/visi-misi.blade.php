@extends('Frontend.layouts')

@section('content')
  <section id="hero-1">
    <div class="hero1-container" data-aos="fade-up">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <h1>Visi Misi SPEMGALAS</h1>
          </div>
          <div class="col-lg-6" align="center">
            <img src="{{ asset('assets/img/visi-img.png') }}" class="img-fluid" width="250px" alt="">
          </div>
        </div>
      </div>
    </div>
    
    
    
</section>    

<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb shadow p-3 mb-5 bg-white rounded">
          <li class="breadcrumb-item"><a href="#">Profile</a></li>
          <li class="breadcrumb-item active" aria-current="page">Visi Misi</li>
        </ol>
      </nav>
</div>


  <main id="main">

    <section id="section-1">

        <div class="container" data-aos="fade-up">
            <h4><center>Visi Misi</center></h4>
            <br>
            <div class="container ml-3">
                <div class="row">
                  <div class="col-lg-6 pt-5 pt-lg-0 align-self-center">
                    <h4>Visi</h4>
                      <p>
                        SMP Muhammadiyah 13 Unggul dalam IMTAQ, IPTEK, Berprestasi, dan Berbudaya Lingkungan.
                        Indikator visi:<br>
                        1. Terwujudnya peran sekolah sebagai pembentuk karakter peserta didik<br>
                        2. Terciptanya peserta didik yang beriman yang menjalankan seluruh <br>
                            kegiatan berdasarkan syariat islam<br>
                        3. Terciptanya peserta didik yang dapat menjalankan ibadah wajib dengan 
                            kesadaran diri<br>
                        4. Terciptanya peserta didik yang berkepribadian santun, sopan, jujur, 
                            bertanggung jawab, disiplin, percaya diri, dan mandiri<br>
                        5. Terciptanya peserta didik yang cerdas, kreatif dan inovatif<br>
                        6. Terciptanya peserta didik yang memiliki wawasan luas terhadap  informasi   
                              dan teknologi<br>
                        7. Terwujudnya generasi islam yang mampu mandiri dan bersaing 
                            menghadapi persaingan global<br>
                        8. Terciptanya peserta didik yang peduli dan mau menjaga kebersihan 
                              lingkungan dimanapun mereka berada<br>
                      </p>
                  </div>
                  <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1" >
                    <img src="./assets/img/visi.png" class="img-fluid" alt="">
                  </div>
                </div>
                
                <div class="row" style="margin-top: 100px;">
                  <div class="col-lg-6" >
                    <img src="./assets/img/misi.png" class="img-fluid" alt="">
                  </div>

                  <div class="col-lg-6 pt-5 pt-lg-0 align-self-center">
                    <h4>Misi</h4>
                      <p>
                        1. Mewujudkan iklim sekolah yang disiplin dan islami<br>
                        2. Menciptakan peserta didik yang beriman dan bertaqwa<br>
                        3. Menciptakan peserta didik yang berakhlaqul karimah<br>
                        4. Mewujudkan  peserta didik yang berkepribadian santun, sopan, jujur, bertanggung jawab, disiplin, percaya diri, dan mandiri<br>
                        5. Mewujudkan peserta didik yang cerdas, kreatif dan inovatif<br>
                        6. Menciptakan peserta didik yang  memiliki kompetensi dalam penguasaan 
                            iptek<br>
                        7. Mewujudkan generasi islam yang mandiri dan kompetitif dalam 
                            menghadapi persaingan global<br>
                        8. Menciptakan peserta didik yang berbudaya lingkungan
                      </p>
                  </div>
                </div>
            </div>

            
        </div>

    </section>

  </main>
  

@endsection