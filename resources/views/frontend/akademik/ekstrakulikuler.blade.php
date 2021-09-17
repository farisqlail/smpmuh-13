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
                        {{-- <img src="./assets/img/xtra.png" class="img-fluid" alt=""> --}}

                        @if ($desk[0]->image == null)
                            <div class="image-null" align="center">
                                <img src="http://mundalodge.com/images/joomlart/demo/default.jpg" class="img-fluid">
                            </div>
                        @else
                            <div class="image-null" align="center">
                                <img src="{{ asset('storage/' . $desk[0]->image) }}" class="img-fluid">
                            </div>
                        @endif
                        <br>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <p>
                            {!! $desk[0]->deskripsi !!}
                        </p>
                    </div>
                </div><br><br><br><br>

                <div class="row">
                    @foreach ($string as $str)
                        <div class="col-md-4">
                            <div class="card shadow-sm p-3 mb-5 bg-white rounded" align="center">
                                <div class="card-body mt-3">
                                    <img src="./assets/img/logo.png" class="img-fluid rounded-circle" alt="">
                                    <h4 class="mt-3">{{ $str->nama_kategori }}</h4>
                                    @foreach ($ekstra as $eks)
                                        @if ($str->id === $eks->kategori_id)
                                            <small><img src="./assets/img/bunder.svg" alt="">
                                                <a
                                                    href="{{ route('frontend.show-ekstra', $eks) }}"><u>{{ $eks->nama_ekstra }}</u></a>
                                            </small>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>


            </div>
        </section>

    </main>
@endsection
