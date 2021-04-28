@extends('Frontend.layouts')

@section('content')

  <section id="hero-1">
    <div class="hero1-container" data-aos="fade-up">
      <div class="container">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <h1>Kur dan Pemb </h1>
            </div>
            <div class="col-lg-6" align="center">
              <img src="{{ asset('assets/img/mars-img.png') }}" class="img-fluid" width="250px" alt="">
            </div>
          </div>
        </div>
    </div>
    
    
    
</section>    

<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb shadow p-3 mb-5 bg-white rounded">
          <li class="breadcrumb-item"><a href="#">Profile</a></li>
          <li class="breadcrumb-item active" aria-current="page">Kur & Pemb</li>
        </ol>
      </nav>
</div>


  <main id="main">

    <h4 align="center" data-aos="fade-up">Kur dan Pemb</h4>
   
  
  </main><!-- End #main -->
@endsection