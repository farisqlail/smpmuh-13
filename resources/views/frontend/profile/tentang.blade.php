@extends('Frontend.layouts')

@section('content')
    <section id="hero-1">
        <div class="hero1-container" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <h1>Tentang SPEMGALAS</h1>
                    </div>
                    <div class="col-lg-6" align="center">
                        <img src="{{ asset('assets/img/tentang-img.png') }}" class="img-fluid" width="250px" alt="">
                    </div>
                </div>
            </div>
        </div>



    </section>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb shadow p-3 mb-5 bg-white rounded">
                <li class="breadcrumb-item"><a href="#">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tentang Sekolah</li>
            </ol>
        </nav>
    </div>


    <main id="main">

        <section id="content">

            <div class="container" data-aos="fade-up">

                <h4 align="center">Tentang Sekolah</h4>
                <div class="row" style="margin-top: 100px;">
                    <div class="col-lg-6">
                        <img src="./assets/img/misi.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6">
                        <p>
                            {!! $tentang[0]->deskripsi !!}
                        </p>
                    </div>
                </div>

                <br><br>


                <h4>Karakter Yang Dibangun</h4><br><br>
                <div class="row">

                    @foreach ($karakter as $krtr)
                        <div class="col-lg-6">
                            <li class="list-group-item sejarah-list d-flex justify-content-between align-items-center"
                                style="margin-top: 30px;">
                                <h5 class="mt-2 ml-3">{{ $krtr->namaKarakter }}</h5>
                                <div class="dropdown-user" data-for=".cyruxx">
                                    <i class="fa fa-angle-down fa-2x text-muted"></i>
                                </div>
                            </li>

                            <div class="cyruxx">
                                <div class="card shadow-sm p-3 mb-5 rounded">
                                    <div class="card-body">
                                        <p class="ml-3 mt-2" align="left">
                                            {!! $krtr->deskripsiKarakter !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
                <br><br>
            </div>

        </section>

    </main>

@endsection
