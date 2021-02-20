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

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"
        rel="stylesheet">
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
                <h1>Pendaftaran Siswa Baru</h1>
            </div>
        </div>
    </section>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb shadow p-3 mb-5 bg-white rounded">
                <li class="breadcrumb-item active" aria-current="page">Pendaftaran</li>
            </ol>
        </nav>
    </div>

    <main id="main">

        <div class="container mb-3">
            <h4 align="center" data-aos="fade-up">Form Pendaftaran</h4><br>

            <form action="{{ route('frontend.daftar.store') }}" id="formDaftar" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Alamat Lengkap</label>
                            <input type="text" class="form-control" name="address">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Kota Lahir</label>
                            <input type="text" class="form-control" name="city">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Tempat Tanggal Lahir</label>
                            <div class="input-group date" id="datetimepicker2">
                                <input type="text" name="birth" class="form-control"><span class="input-group-addon"><i
                                        class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Asal Sekolah</label>
                    <input type="text" class="form-control" name="from">
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama Ayah</label>
                            <input type="text" class="form-control" name="father" >
                        </div>

                        <div class="form-group">
                            <label>Nomor HP Ayah</label>
                            <input type="tel" class="form-control" name="number-father" >
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama Ibu</label>
                            <input type="text" class="form-control" name="mother">
                        </div>

                        <div class="form-group">
                            <label>Nomor HP Ibu</label>
                            <input type="tel" class="form-control" name="number-mother">
                        </div>
                    </div>
                </div>

                <div class="mt-3" align="center">
                    <button type="submit" id="btnDaftar" class="btn btn-komentar">Daftar</button>
                </div>

            </form>
        </div>

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
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.es.min.js">
    </script>

    <script type="text/javascript">
        $('#datetimepicker2').datepicker({
            weekStart: 0,
            todayBtn: "linked",
            language: "id",
            orientation: "bottom auto",
            keyboardNavigation: false,
            autoclose: true
        });

    </script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#btnDaftar').on('click', function () {
                $('#formDaftar').submit();
            });
        });
    </script>

</body>

</html>
