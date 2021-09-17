@extends('frontend.layouts')

@section('content')

<section id="hero-1">
    <div class="hero1-container" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <h1>{{ $ekstra->nama_ekstra }}</h1>
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
            <li class="breadcrumb-item active" aria-current="page">{{ $ekstra->nama_ekstra }}</li>
        </ol>
    </nav>
</div>

    <div class="container" style="margin-top: 40px; margin-bottom: 40px;">
        <h2>{{ $ekstra->nama_ekstra }}</h2>
        <p>
            {!! $ekstra->deskripsi !!}
        </p>
    </div>

@endsection
