@extends('frontend.layouts')

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
                       {!! $visi[0]->visi !!}
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
                       {!! $visi[0]->misi !!}
                      </p>
                  </div>
                </div>
            </div>

            
        </div>

    </section>

  </main>
  

@endsection