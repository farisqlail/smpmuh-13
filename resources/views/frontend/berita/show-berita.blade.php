<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SMP Muhammadiyah 13 Surabaya</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.3/dist/css/uikit.min.css" />

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-none d-lg-block">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <i class="icofont-phone"></i> 031-3772661 &nbsp;
                <i class="icofont-envelope"></i><a href="mailto:smpmuh_13sby@yahoo.com">smpmuh_13sby@yahoo.com</a>
            </div>
            <div class="social-links">
                <a href="https://www.facebook.com/SMP-Muhammadiyah-13-Surabaya-1060051160727782/" class="facebook"
                    target="blank"><i class="icofont-facebook"></i></a>
                <a href="https://www.instagram.com/smpmuh13sby/" class="instagram" target="blank"><i
                        class="icofont-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCqTBxFnTPPQ1RIxiKTSrnOQ" class="youtube" target="blank"><i
                        class="icofont-youtube"></i></a>
                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container d-flex">

            <div class="logo mr-auto">
                <a href="{{ url('/') }}"><img src="{{ asset('./assets/img/logo-navbar.png') }}"
                        class="img-fluid mt-1 ml-3" alt=""></a>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="drop-down"><a href="">Profile</a>
                        <ul>
                            <li><a href="{{ url('/tentang') }}">Tentang Sekolah</a></li>
                            <li><a href="{{ url('/visi') }}">Visi Misi</a></li>
                            <li><a href="{{ url('/akreditasi') }}">Akreditasi Sekolah</a></li>
                            <li><a href="{{ url('/beasiswa') }}">Beasiswa</a></li>
                            <li><a href="{{ url('/staf') }}">Staff dan Guru</a></li>
                            <li><a href="{{ url('/mars') }}">Mars Muhammadiyah</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/ekstra') }}">Ekstrakulikuler</a></li>
                    <li><a href="{{ url('/galeri') }}">Galeri</a></li>
                    <li><a href="{{ url('/berita') }}">Berita</a></li>
                    <li><a href="{{ url('/daftar') }}">Pendaftaran</a></li>
                    </li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

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



    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">

            <div class="container">
                <div class="row">
                    <div class="col-sm-4" align="left">
                        <img src="{{ asset('./assets/img/logo-2.png') }}" class="img-fluid" alt="">
                        <p>Hallo, Selamat Datang di SMP Muhammadiyah
                            13 Surabaya. Sekolah islam memadukan nilai-nilai
                            tauhid ke seluruh kurikulum dan aktivitasnya </p>

                        <div class="social-links">
                            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                            <a href="#" class="youtube"><i class="icofont-youtube"></i></a>
                            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                        </div><br><br>
                    </div>
                    <div class="col-sm-4" align="left">
                        <h5>Menu</h5><br><br>
                        <div class="row">
                            <div class="col">
                                <a href="{{ url('/tentang') }}">Tentang Kami</a><br>
                                <a href="{{ url('/visi') }}">Visi Misi</a><br>
                                <a href="{{ url('/akreditasi') }}">Akreditasi</a><br>
                                <a href="{{ url('/beasiswa') }}">Beasiswa</a><br>
                                <a href="{{ url('/staf') }}">Staff dan Guru</a><br>
                                <a href="{{ url('/mars') }}">Mars Muhammadiyah</a><br>

                            </div>
                            <div class="col">
                                <a href="{{ url('/ekstra') }}">Ekstrakulikuler</a><br><br>
                                <a href="{{ url('/galeri') }}">Galeri</a><br><br>
                                <a href="{{ url('/berita') }}">Berita</a><br><br>
                                <a href="{{ url('/') }}">Pendaftaran</a><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4" align="left">
                        <h5>Informasi</h5>
                        <p><i class="icofont-location-arrow"></i> Jl. Tambak Segaran No. 27 Surabaya<br />
                            <i class="icofont-phone"></i> 031-3772661 <br />
                            <i class="icofont-envelope"></i> smpmuh_13sby@yahoo.com
                        </p>
                    </div>
                </div>
            </div>

    </footer><!-- End Footer -->
    <div class="akhir" align="center">
        <small class="mt-1">2020 © All Rights Reserved Design By @Tim Elit</small>
    </div>

    <a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.3/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.3/dist/js/uikit-icons.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#btnKomen').on('click', function() {
                $('#formKomen').submit();
            });
        });

    </script>

</body>

</html>
