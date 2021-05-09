@extends('frontend.layouts')

@section('content')
    <section id="hero-1">
        <div class="hero1-container" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <h1>Kegitan Penunjang</h1>
                    </div>
                    <div class="col-lg-6" align="center">
                        <img src="{{ asset('assets/img/kegiatan-penunjang.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>



    </section>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb shadow p-3 mb-5 bg-white rounded">
                <li class="breadcrumb-item"><a href="#">Kegiatan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kegiatan Penunjang</li>
            </ol>
        </nav>
    </div>


    <main id="main">

        <section id="section-1">

            <div class="container" data-aos="fade-up">
                <h4>
                    <center>Kegiatan Penunjang</center>
                </h4>
                <br>

                <div class="row">
                    <div class="col-md-6">
                        @if ($deskripsiKegiatan[0]->image == null)
                        <div class="image-null" align="center">
                            <img src="http://mundalodge.com/images/joomlart/demo/default.jpg" class="img-fluid" width="600">
                        </div>
                    @else
                        <div class="image-null" align="center">
                            <img src="{{ asset('storage/' . $deskripsiKegiatan[0]->image) }}" class="img-fluid" width="600">
                        </div>
                    @endif
                    </div>
                    <div class="col-md-6 align-self-center">
                        <p>
                           {!! $deskripsiKegiatan[0]->deskripsi !!}
                            adipisci inventore ipsa omnis!
                        </p>
                    </div>
                </div>

                <hr>

                <div class="row">
                    @foreach ($kegiatanPenunjang as $kp)
                        <div class="col-md-4">
                            <div class="card shadow-sm mb-5 bg-white rounded" style="border: none;">
                                <div class="card-body">
                                    {{$kp->nama_kegiatan}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </section>

    </main>
@endsection
