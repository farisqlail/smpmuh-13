@extends('frontend.layouts')

@section('content')
  <section id="hero-1">
    <div class="hero1-container" data-aos="fade-up">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <h1>Ekstrakulikuler</h1>
          </div>
          <div class="col-lg-6" align="center">
            <img src="{{ asset('assets/img/xtra-img.png') }}" class="img-fluid" width="250px" alt="">
          </div>
        </div>
      </div>
    </div>
    
</section>    

<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb shadow p-3 mb-5 bg-white rounded">
          <li class="breadcrumb-item"><a href="#">Profile</a></li>
          <li class="breadcrumb-item active" aria-current="page">Ekstrakurikler</li>
        </ol>
      </nav>
</div>


  <main id="main">

    <section id="section-6" data-aos="fade-up">
        <h4 align="center">Ekstrakurikler SPEMGALAS</h4>
        <br>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="./assets/img/xtra.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 align-self-center">
                    <p>
                        Kegiatan ekstrakurikuler merupakan salah satu alat pengenalan siswa pada hubungan sosial. Di dalamnya terdapat pendidikan pengenalan diri dan pengembangan kemampuan selain pemahaman materi pelajaran. 
                        Berangkat dari pemikiran tersebut, di SMP Muhammadiyah 13 Surabaya mempunyai  berbagai kegiatan ekstrakurikuler antara lain Ekstrakulikuler Wajib dan Ekstrakulikuer Pilihan. <br><br>
                    </p>
                    <h6>Untuk Yang Wajib yaitu </h6><br>
                    <p>
                        1. Tapak Suci<br>
                        2. Hizbul Wathan
                    </p>
                </div>
            </div><br><br><br><br>

            <div class="row">
              <div class="col">
                 <div class="border-9 mb-3" style="border: 2px solid #3B519C; width: 60px;"></div>
                 <h4>Untuk Ekstrakulikuler 
                  Pilihan di SPEMGALAS</h4>
                  <p>Ada 5 Ekstrakurikler di SMP 
                    Muhammadiyah 13 Surabaya
                    diantaranya adalah</p>
              </div>
              <div class="col">
                <div class="card xtra shadow-sm p-3 mb-5 bg-white rounded" align="center">
                  <div class="card-head mt-3">
                      <img src="./assets/img/logo.png" class="img-fluid rounded-circle" alt="">
                      <h4 class="mt-3">Olimpiade</h4>
                      <small><img src="./assets/img/bunder.svg" alt=""> Matematika</small>
                      <small><img src="./assets/img/bunder.svg" alt=""> IPA</small>
                  </div>
              </div>

              </div>
              <div class="col">
                  <div class="card xtra shadow-sm p-3 mb-5 bg-white rounded" align="center">
                      <div class="card-head mt-3">
                          <img src="./assets/img/logo.png" class="img-fluid rounded-circle" alt="">
                          <h4 class="mt-3">Kesenian </h4>
                          <small><img src="./assets/img/bunder.svg" alt=""> Band</small>
                          <small><img src="./assets/img/bunder.svg" alt=""> Samroh</small>
                      </div>
                  </div>
              </div>
          </div>
          

            <div class="row">
                <div class="col">
                  <div class="card xtra shadow-sm p-3 mb-5 bg-white rounded" align="center">
                    <div class="card-head mt-3">
                        <img src="./assets/img/logo.png" class="img-fluid rounded-circle" alt="">
                        <h4 class="mt-3">Olahraga</h4>
                        <small><img src="./assets/img/bunder.svg" alt=""> Futsal</small>
                        <small><img src="./assets/img/bunder.svg" alt=""> Renang</small>
                        <small><img src="./assets/img/bunder.svg" alt=""> Tapak Suci</small>
                    </div>
                </div>
                </div>
                <div class="col">
                    <div class="card xtra shadow-sm p-3 mb-5 bg-white rounded" align="center">
                        <div class="card-head mt-3">
                            <img src="./assets/img/logo.png" class="img-fluid rounded-circle" alt="">
                            <h4 class="mt-3">Kebahasaan</h4>
                            <small><img src="./assets/img/bunder.svg" alt=""> Jurnalistik</small>
                            <small><img src="./assets/img/bunder.svg" alt=""> English Club</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card xtra shadow-sm p-3 mb-5 bg-white rounded" align="center">
                        <div class="card-head mt-3">
                            <img src="./assets/img/logo.png" class="img-fluid rounded-circle" alt="">
                            <h4 class="mt-3">Keagamaan</h4>
                            <small><img src="./assets/img/bunder.svg" alt=""> BTQ</small>
                            <small><img src="./assets/img/bunder.svg" alt=""> Qiroah</small>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

</main>
  @endsection