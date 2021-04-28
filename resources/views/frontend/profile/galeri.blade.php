@extends('Frontend.layouts')

@section('content')
    <section id="hero-1">
        <div class="hero1-container" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <h1>Galeri SPEMGALAS</h1>
                    </div>
                    <div class="col-lg-6" align="center">
                        <img src="{{ asset('assets/img/galeri-img.png') }}" class="img-fluid" width="250px" alt="">
                    </div>
                </div>
            </div>
        </div>



    </section>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb shadow p-3 mb-5 bg-white rounded">
                <li class="breadcrumb-item"><a href="#">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">Galeri</li>
            </ol>
        </nav>
    </div>


    <main id="main">

        <section id="section-4" data-aos="fade-up">
            <h4 align="center">Galeri SPEMGALAS</h4><br>

            <div class="container">
                <div class="row">
                    @foreach ($galeri as $glr)
                        <div class="col-md-4">
                            <figure class="snip1205 blue">
                                <img src="{{ asset('storage/' . $glr->image) }}" alt="sample43" />
                                <i class="icofont-search"></i>
                                <a href="{{ asset('storage/' . $glr->image) }}" data-gall="galeri"
                                    class="venobox"></a>
                            </figure>
                        </div>
                    @endforeach
                </div> <br> <br>

            </div>
        </section>

    </main>

@endsection