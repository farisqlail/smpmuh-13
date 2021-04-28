@extends('Frontend.layouts')

@section('content')
    <section id="hero-1">
        <div class="hero1-container" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <h1>Staff Dan Guru</h1>
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
                <li class="breadcrumb-item"><a href="#">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">Staf Guru</li>
            </ol>
        </nav>
    </div>


    <main id="main">

        <section id="section-7" data-aos="fade-up">
            <h4 align="center" style="font-weight: 600;">Staf Dan Guru</h4>
            <br>
            <div class="container">
                <div class="row">
                    @foreach ($staff as $stf)
                        <div class="col-md-4">
                            <div class="uk-child-width-1-2@m" uk-grid align="center">
                                <div style="width: 340px;">
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-media-top">
                                            <img src="{{ asset('storage/' . $stf->image) }}" class="mt-1" alt="">
                                        </div>
                                        <div class="uk-card-body">
                                            <h3 class="uk-card-title">{{ $stf->name }}</h3>
                                            <p>{{ $stf->jabatan }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                    @endforeach
                </div>
        </section>

    </main>

@endsection