@extends('frontend.layouts')

@section('content')
  <section id="hero-1">
    <div class="hero1-container" data-aos="fade-up">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <h1>Beasiswa SPEMGALAS</h1>
          </div>
          <div class="col-lg-6" align="center">
            <img src="{{ asset('assets/img/bea-img.png') }}" class="img-fluid" width="250px" alt="">
          </div>
        </div>
      </div>
    </div>
    
    
    
</section>    

<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb shadow p-3 mb-5 bg-white rounded">
          <li class="breadcrumb-item"><a href="#">Profile</a></li>
          <li class="breadcrumb-item active" aria-current="page">Beasiswa</li>
        </ol>
      </nav>
</div>


  <main id="main">

    <section id="section-2">

        <div class="container" data-aos="fade-up">
            <h4><center>Beasiswa</center></h4>
            <br><br><br>
            <div class="container ml-3 bg-bea">
               <div class="row">
                 <div class="col-lg-6">
                    <img src="./assets/img/beasiswa.png" class="img-fluid" alt=""><br><br>
                 </div>
                 <div class="col-lg-6 align-self-center">
                  <ul class="list-group">
                    <li class="list-group-item shadow-sm p-3 mb-5 bg-white rounded">
                      <h6>Beasiswa Prestasi</h6>
                      <p>
                        Beasiswa ini kami berikan untuk siswa yang berprestasi atau yang mendapatkan peringkat 1 dikelas.
                      </p>
                    </li>

                    <li class="list-group-item shadow-sm p-3 mb-5 bg-white rounded">
                      <h6>Beasiswa Siswa Miskin (BSM)</h6>
                      <p>
                        Beasiswa ini berasal dari pemerintah yang diberikan untuk siswa yang mempunyai Kartu Perlindungan Sosial (KPS)
                      </p>
                    </li>

                    <li class="list-group-item shadow-sm p-3 mb-5 bg-white rounded">
                      <h6>Beasiswa Untuk Siswa Tidak Mampu</h6>
                      <p>
                        Beasiswa ini diberikan untuk siswa yang kurang mampu bahkan kita membebaskan biaya SPP untuk siswa yang tidak mampu tapi selalu berprestasi.
                      </p>
                    </li>


                  </ul>
                 </div>
               </div>
            </div>
        </div>

    </section>

  </main>
  
@endsection