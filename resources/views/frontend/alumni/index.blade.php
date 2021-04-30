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
                    <img src="{{ asset('assets/img/staff-img.png') }}" class="img-fluid"
                        width="250px" alt="">
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
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://cdn.idntimes.com/content-images/post/20190110/c12-e35fa457b5c8da29b2c488cf2204dcbd_600x400.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body" align="center">
                        <h4 class="card-title">Asep</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://cdn.idntimes.com/content-images/post/20190110/c12-e35fa457b5c8da29b2c488cf2204dcbd_600x400.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body" align="center">
                        <h4 class="card-title">Asep</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://cdn.idntimes.com/content-images/post/20190110/c12-e35fa457b5c8da29b2c488cf2204dcbd_600x400.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body" align="center">
                        <h4 class="card-title">Asep</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
