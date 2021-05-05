<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SMP Muhammadiyah 13 Surabaya</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-none d-lg-block">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <i class="icofont-phone"></i> {{ $kontak[0]->telp }} &nbsp;
                <i class="icofont-envelope"></i><a href="mailto:smpmuh_13sby@yahoo.com">smpm13sby@gmail.com</a>
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
                            <li><a href="{{ url('/kurikulum') }}">kurikulum dan Pembelajaran</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a href="">Kegiatan</a>
                    <ul>
                        <li><a href="{{ url('/ekstra') }}">Ekstrakurikuler</a></li>
                        <li><a href="{{ url('/prestasi') }}">Prestasi Siswa</a></li>
                        <li><a href="{{ url('/ekstra') }}">Kegiatan Penunjang</a></li>
                    </ul>
                    </li>
                    <li><a href="{{ url('/galeri') }}">Galeri</a></li>
                    <li><a href="{{ url('/berita') }}">Berita</a></li>
                    <li><a href="{{ url('/alumni') }}">Alumni</a></li>
                    <li><a href="{{ url('/kontak') }}">Kontak</a></li>
                    <li><a href="{{ url('/daftar') }}">Pendaftaran</a></li>
                    </li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <div class="mt-0">
        @yield('content')
    </div>


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
                                <a href="{{ url('/kurikulum') }}">kurikulum dan Pembelajaran</a><br>
                                <a href="{{ url('/ekstra') }}">Ekstrakurikuler</a><br>
                                <a href="{{ url('/prestasi') }}">Prestasi Siswa</a><br>
                                <a href="{{ url('/ekstra') }}">Kegiatan Penunjang</a><br>

                            </div>
                            <div class="col">
                                <a href="{{ url('/ekstra') }}">Ekstrakulikuler</a><br>
                                <a href="{{ url('/galeri') }}">Galeri</a><br>
                                <a href="{{ url('/berita') }}">Berita</a><br>
                                <a href="{{ url('/alumni') }}">Alumni</a><br>
                                <a href="{{ url('/kontak') }}">Kontak</a><br>
                                <a href="{{ url('/daftar') }}">Pendaftaran</a><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4" align="left">
                        <h5>Informasi</h5>
                        <p><i class="icofont-location-arrow"></i> Jl. Tambak Segaran No. 27 Surabaya<br />
                            <i class="icofont-phone"></i> {{ $kontak[0]->telp }} <br>
                            <i class="icofont-envelope"></i> <a
                                href="mailto:{{ $kontak[0]->email }}">{{ $kontak[0]->email }}</a>
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

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>

    <script>
        var sp = document.querySelector('.search-open');
        var searchbar = document.querySelector('.search-inline');
        var shclose = document.querySelector('.search-close');

        function changeClass() {
            searchbar.classList.add('search-visible');
        }

        function closesearch() {
            searchbar.classList.remove('search-visible');
        }

        sp.addEventListener('click', changeClass);
        shclose.addEventListener('click', closesearch);

    </script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
