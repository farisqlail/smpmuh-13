@extends('frontend.layouts')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin="" />
<style>
    #mapid {
        height: 500px;
    }

</style>

<section id="hero-1">
    <div class="hero1-container" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <h1>Kontak</h1>
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
            <li class="breadcrumb-item"><a href="#">Kontak</a></li>
        </ol>
    </nav>
</div>

<main id="main">

    <h4 align="center" data-aos="fade-up">Kontak Kami</h4>

    <div class="container mb-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div id="mapid"></div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <form action="" method="post">
                            <div class="form-group">
                            <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="email">
                            </div>

                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                            </div>

                            <button class="btn-kontak">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main><!-- End #main -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
<script>
    var mymap = L.map('mapid').setView([-7.24711, 112.76074], 13);
    var marker = L.marker([-7.24711, 112.76074]).addTo(mymap);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoiZmFyaXNxbGFpbCIsImEiOiJja28zeXAwb3owdWE4MnVscnlwc29idnY3In0.IBa0y_xJQDGHdsjY4DrgXQ'
    }).addTo(mymap);

</script>

@endsection
