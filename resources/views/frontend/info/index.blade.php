@extends('Frontend.layouts')

@section('content')
  <section id="hero-1">
    <div class="hero1-container" data-aos="fade-up">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <h1>Informasi PPDB</h1>
          </div>
          <div class="col-lg-6" align="center">
            <img src="{{ asset('assets/img/info.png') }}" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </div>
    
    
    
</section>  

<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb shadow p-3 mb-5 bg-white rounded">
          <li class="breadcrumb-item"><a href="#">Profile</a></li>
          <li class="breadcrumb-item active" aria-current="page">Info</li>
        </ol>
      </nav>
</div>


  <main id="main">

    <div class="container mb-3">
        <img src="{{ asset('./assets/img/ppdb-info.jpeg') }}" style="width: 600px;" class="img-fluid">
    </div>

  </main>
@endsection