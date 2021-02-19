@extends('frontend.layouts')

@section('content')

    <section id="hero-1">
        <div class="hero1-container" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <h1>Berita SPEMGALAS</h1>
                    </div>
                    <div class="col-lg-6" align="center">
                        <img src="{{ asset('assets/img/berita-img.png') }}" class="img-fluid" width="250px" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb shadow p-3 mb-5 bg-white rounded">
                <li class="breadcrumb-item"><a href="#">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">Berita</li>
            </ol>
        </nav>
    </div>


    <main id="main">

        <section id="section-5" class="section-5" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        @foreach ($berita as $brt)
                            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                                <div class="uk-card-media-left uk-cover-container">
                                    <a href="{{ route('frontend.show-berita', $brt) }}">
                                        <img src="{{ asset('storage/' . $brt->image) }}" alt="" uk-cover>
                                        <canvas width="600" height="400"></canvas>
                                    </a>
                                </div>

                                <div>
                                    <div class="uk-card-body">
                                        <a href="{{ route('frontend.show-berita', $brt) }}" class="link">
                                            <h3 class="uk-card-title">{{ $brt->judul }}</h3>
                                        </a>
                                        <p>
                                            {!! Str::limit($brt->deskripsi, 30) !!}
                                        </p>

                                        <hr>
                                        <small class="ml-3"><i class="icofont-calendar" style="color: #3B519C;"></i>&nbsp;
                                            {{-- {{ $brt->created_at->diffForHumans() }} --}}
                                            {{ \Carbon\Carbon::parse($brt->created_at)->diffForHumans() }}
                                        </small>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <br><br>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination d-flex justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-md-10">
                        <form action="{{ route('frontend.berita-search') }}" method="GET">
                            <input class="form-control" name="search" value="{{ old('search') }}" type="text"
                                placeholder="Search ...">
                        
                            <br>
                        </form>
                        <div class="card">
                            <div class="card-body">
                                <h6 style="font-weight: 500;">
                                    Berita Terbaru
                                    <div class="border-1 mt-2" style="border: 2px solid #3B519C; width: 40px;"></div>
                                </h6>
                                @foreach ($berita as $brt)
                                    <a href="{{ route('frontend.show-berita', $brt) }}"
                                        class="berita-terbaru">{{ $brt->judul }}</a><br>
                                @endforeach
                        
                            </div>
                        </div><br>

                        

                    </div>
                </div>
            </div>

        </section>

    </main>

@endsection
