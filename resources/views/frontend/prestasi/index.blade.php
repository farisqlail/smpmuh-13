@extends('frontend.layouts')

@section('content')

    <section id="hero-1">
        <div class="hero1-container" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <h1>Prestasi Siswa</h1>
                    </div>
                    <div class="col-lg-6" align="center">
                        <img src="{{ asset('assets/img/prestasi.svg') }}" class="img-fluid" width="250px" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb shadow p-3 mb-5 bg-white rounded">
                <li class="breadcrumb-item"><a href="#">Kegiatan</a></li>
                <li class="breadcrumb-item"><a href="#">Prestasi Siswa</a></li>
            </ol>
        </nav>
    </div>

    <main id="main">

        <h4 align="center" data-aos="fade-up">Prestasi Siswa</h4>

        <div class="container mb-3">
            <div class="row">
                <div class="card-columns">
                @foreach ($prestasi as $prst)
                    <div class="card shadow mb-5 bg-white rounded">
                        <img src="{{ asset('storage/' . $prst->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 style="font-weight: 500">{{ $prst->nama }}</h4>
                            <small class="mt-2"><i>Kelas {{ $prst->kelas }}</i></small>
                            <p class="mt-1">
                                {{ $prst->deskripsi }}
                            </p>
                            <a href="{{ route('frontend.show-prestasi', $prst) }}" class="text-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>


    </main><!-- End #main -->
@endsection
