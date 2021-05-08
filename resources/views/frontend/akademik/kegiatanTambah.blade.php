@extends('frontend.layouts')

@section('content')
  <section id="hero-1">
    <div class="hero1-container" data-aos="fade-up">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <h1>Kegitan Penunjang</h1>
          </div>
          <div class="col-lg-6" align="center">
            <img src="{{ asset('assets/img/akre-img.png') }}" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </div>
    
    
    
</section>    

<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb shadow p-3 mb-5 bg-white rounded">
          <li class="breadcrumb-item"><a href="#">Kegiatan</a></li>
          <li class="breadcrumb-item active" aria-current="page">Kegiatan Penunjang</li>
        </ol>
      </nav>
</div>


  <main id="main">

    <section id="section-1">

        <div class="container" data-aos="fade-up">
            <h4><center>Kegiatan Penunjang</center></h4>
            <br>
            
            <div class="row">
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1620434015857-1fe36766911d?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxM3x8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="" class="img-fluid rounded" width="600" srcset="">
                </div>
                <div class="col-md-6 align-self-center">
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae praesentium nulla ipsa sapiente dolorum molestias veniam corporis ut, laborum consequuntur quibusdam natus. Eum, ratione repudiandae vitae quis excepturi culpa provident.
                        <br><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ipsa rem ad? Qui atque reprehenderit nulla necessitatibus, harum hic optio iure natus provident libero rem architecto adipisci inventore ipsa omnis!
                    </p>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-2">
                    <div class="card shadow-sm mb-5 bg-white rounded" style="border: none;">
                        <div class="card-body">
                            Factory visit
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card shadow-sm mb-5 bg-white rounded" style="border: none;">
                        <div class="card-body">
                            Factory visit
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card shadow-sm mb-5 bg-white rounded" style="border: none;">
                        <div class="card-body">
                            Factory visit
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card shadow-sm mb-5 bg-white rounded" style="border: none;">
                        <div class="card-body">
                            Factory visit
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card shadow-sm mb-5 bg-white rounded" style="border: none;">
                        <div class="card-body">
                            Factory visit
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card shadow-sm mb-5 bg-white rounded" style="border: none;">
                        <div class="card-body">
                            Factory visit
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

  </main>
  @endsection