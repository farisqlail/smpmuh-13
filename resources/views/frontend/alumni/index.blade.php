@extends('frontend.layouts')

@section('content')

    <section id="hero-1">
        <div class="hero1-container" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <h1>Alumni</h1>
                    </div>
                    <div class="col-lg-6" align="center">
                        <img src="{{ asset('assets/img/staff-img.png') }}" class="img-fluid" width="250px" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb shadow p-3 mb-5 bg-white rounded">
                <li class="breadcrumb-item"><a href="#">Alumni</a></li>
            </ol>
        </nav>
    </div>

    <main id="main">
        <h4 align="center" data-aos="fade-up">Kata Alumni</h4>
        <div class="container mb-3" align="center">
            <div class="uk-child-width-1-3@m" uk-grid>
            @foreach ($alumni as $alm)
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <img src="{{ asset('storage/alumni/' . $alm->image) }}" alt="">
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">{{ $alm->nama }}</h3>
                                <p><i>"{{ $alm->testimoni }}"</i></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

        </div>
    </main>

@endsection
