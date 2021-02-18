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

        <section id="section-5" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    @foreach ($berita as $brt)
                        <div class="col-lg-8">
                            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                                <div class="uk-card-media-left uk-cover-container">
                                    <img src="{{ asset('storage/' . $brt->image) }}" alt="" uk-cover>
                                    <canvas width="600" height="400"></canvas>
                                </div>
                                <div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title">{{ $brt->judul }}</h3>
                                        <p>
                                          {!! $brt->deskripsi !!}
                                        </p>

                                        <hr>
                                        <small class="ml-3"><i class="icofont-calendar" style="color: #3B519C;"></i>&nbsp;
                                            {{ $brt->created_at->diffForHumans() }}
                                          </small>
                                    </div>
                                </div>
                    @endforeach

                </div><br><br>

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

            <div class="col-lg-4">
                <input class="form-control" type="text" placeholder="Search ..."><br>
                <div class="card">
                    <div class="card-body">
                        <h6 style="font-weight: 500;">
                            Berita Terbaru
                            <div class="border-1 mt-2" style="border: 2px solid #3B519C; width: 40px;"></div>
                        </h6>
                        <a href="#" class="berita-terbaru"> PPDB SMP Muhammadiyah 13 2020-2021</a><br>
                        <a href="#" class="berita-terbaru"> PPDB SMP Muhammadiyah 13 2020-2021</a><br>
                        <a href="#" class="berita-terbaru"> PPDB SMP Muhammadiyah 13 2020-2021</a><br>
                        <a href="#" class="berita-terbaru"> PPDB SMP Muhammadiyah 13 2020-2021</a>
                    </div>
                </div><br>

                <div class="card">
                    <div class="card-body">
                        <h4 style="font-weight: 500;">
                            Feed Instagram SPEMGALAS
                            <div class="border-2 mt-2" style="border: 2px solid #3B519C; width: 40px;"></div>
                        </h4>
                        <div class="row">
                            <div class="col">
                                <img src="./assets/img/logo.png" class="img-fluid" alt="">
                            </div>
                            <div class="col">
                                <strong>smp muhammadiyah 13 surabaya</strong>
                                <p>@smpmuh13sby</p>
                                <a href="https://www.instagram.com/smpmuh13sby/" target="blank" class="btn"
                                    style="background-color: #3B519C; color: #fff;">Follow</a>
                            </div>
                        </div>
                    </div>
                    <a href="https://www.instagram.com/smpmuh13sby/" target="blank">
                        <img src="./assets/img/feed.png" class="img-fluid mt-3" style="width: 100%;" alt="">
                    </a>
                </div>

            </div>
            </div>
            </div>

        </section>

    </main>

@endsection
