@extends('frontend.layouts')

@section('content')
    <section id="hero-1">
        <div class="hero1-container" data-aos="fade-up">
            <div class="container align-self-center">
                <h1>Prestasi Siswa</h1>
            </div>
        </div>



    </section>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb shadow p-3 mb-5 bg-white rounded">
                <li class="breadcrumb-item"><a href="#">Kegiatan</a></li>
                <li class="breadcrumb-item"><a href="#">Prestasi Siswa</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $prestasi->namaAcara }}</li>
            </ol>
        </nav>
    </div>


    <main id="main">
        <div class="container">
            <h2 style="font-weight: 600;">{{ $prestasi->nama }}</h2>
            <div class="row">
                <div class="col">
                    <small><i class="icofont-calendar"></i>&nbsp;
                        {{ \Carbon\Carbon::parse($prestasi->created_at)->diffForHumans() }}</small>
                </div>
                <div class="col" align="right">
                    <div class="social-links">
                        <a href="https://www.facebook.com/SMP-Muhammadiyah-13-Surabaya-1060051160727782/"
                            class="facebook" target="blank"><i
                                class="icofont-facebook icofont-1x"></i></a>&nbsp;&nbsp;
                        <a href="https://www.instagram.com/smpmuh13sby/" class="instagram" target="blank"><i
                                class="icofont-instagram icofont-1x"></i></a>&nbsp;&nbsp;
                        <a href="https://www.youtube.com/channel/UCqTBxFnTPPQ1RIxiKTSrnOQ" class="youtube"
                            target="blank"><i class="icofont-youtube icofont-1x"></i></a>&nbsp;&nbsp;
                        <a href="#" class="twitter"><i class="icofont-twitter icofont-1x"></i></a>
                    </div>
                </div>
            </div><br>

            <img src="{{ asset('storage/' . $prestasi->image) }}" class="img-fluid" style="width: 100%;"
            alt=""><br><br>

        <p>
            @php
                echo $prestasi->deskripsi;
            @endphp
        </p>
        <br><br>

        </div>
    </main>
    @endsection