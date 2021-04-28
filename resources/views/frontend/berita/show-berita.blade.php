@extends('frontend.layouts')

@section('content')
    <section id="hero-1">
        <div class="hero1-container" data-aos="fade-up">
            <div class="container align-self-center">
                <h1>Berita</h1>
            </div>
        </div>



    </section>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb shadow p-3 mb-5 bg-white rounded">
                <li class="breadcrumb-item"><a href="#">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $berita->judul }}</li>
            </ol>
        </nav>
    </div>


    <main id="main">

        <section id="section-8" data-aos="fade-up">
            <div class="container">

                <h2 style="font-weight: 600;">{{ $berita->judul }}</h2>
                <div class="row">
                    <div class="col">
                        <small><i class="icofont-calendar"></i>&nbsp;
                            {{ \Carbon\Carbon::parse($berita->created_at)->diffForHumans() }}</small>
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

                <img src="{{ asset('storage/' . $berita->image) }}" class="img-fluid" style="width: 100%;"
                    alt=""><br><br>

                <p>
                    @php
                        echo $berita->deskripsi;
                    @endphp
                </p>
                <br><br>
            </div>


            <div class="container">
                <br>
                <div class="border-6" style="border: 1px solid #909090;"></div>
                <br>
                <h4 style="font-weight: 500;">Komentar
                    <div class="border-4 mt-2" style="border: 2px solid #3B519C; width: 40px;"></div>
                </h4><br>

                @foreach ($comment as $cmt)
                    <div class="media mt-3 mb-3">
                        <img src="{{asset('/assets/img/user.png')}}" class="mr-3 ml-2" style="width: 60px" alt="...">
                        <div class="media-body">
                            <h5 class="mt-0" style="font-weight: 500;">{{ $cmt->name }}</h5>
                            <small><i class="icofont-calendar"></i>&nbsp; {{ \Carbon\Carbon::parse($cmt->created_at)->diffForHumans() }}</small>
                            <p>
                                {{ $cmt->content }}
                            </p>
                        </div>
                    </div><br>
                @endforeach

                <br><br>
                <h6>Tinggalkan Komentar</h6>
                <form action="{{ route('frontend.comment.store') }}" id="formKomen" method="POST">
                    {{ csrf_field() }}
                    <input class="form-control" type="hidden" name="berita_id" value="{{ $berita->id }}">

                    <div class="form-group">
                        <label>Komentar</label>
                        <textarea class="form-control" name="content" rows="5"></textarea>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Nama *</label>
                                <input type="text" class="form-control" name="name" placeholder="nama">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Email *</label>
                                <input type="email" class="form-control" name="email" placeholder="email">
                            </div>
                        </div>
                    </div><br>


                    <button type="submit" id="btnKomen" class="btn btn-komentar">Kirim Komentar</button>

                </form>
            </div>
        </section>

    </main>


@endsection