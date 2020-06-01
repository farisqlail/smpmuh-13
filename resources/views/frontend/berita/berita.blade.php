<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMP Muhammadiyah 13 Surabaya</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

   <!-- Favicons -->
   <link href="{{ asset('assets/img/logo.png')}}" rel="icon">

   <!-- Google Fonts -->
   <link
     href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
     rel="stylesheet">
 
   <!-- Vendor CSS Files -->
   <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.3/dist/css/uikit.min.css" />
 
   <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
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
        <a href="https://www.facebook.com/SMP-Muhammadiyah-13-Surabaya-1060051160727782/" class="facebook" target="blank"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/smpmuh13sby/" class="instagram" target="blank"><i class="icofont-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCqTBxFnTPPQ1RIxiKTSrnOQ" class="youtube" target="blank"><i class="icofont-youtube"></i></a>
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <a href="{{ url('/') }}"><img src="{{ asset('./assets/img/logo-navbar.png')}}" class="img-fluid mt-1 ml-3" alt=""></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li class="drop-down"><a href="">Profile</a>
                <ul>
                  <li><a href="{{ url('/tentang') }}">Tentang Sekolah</a></li>
                  <li><a href="{{ url('/visi') }}">Visi Misi</a></li>
                  <li><a href="{{ url('/akreditasi') }}">Akreditasi Sekolah</a></li>
                  <li><a href="{{ url('/beasiswa') }}">Beasiswa</a></li>
                  <li><a href="{{ url('/staf') }}">Stuf dan Guru</a></li>
                  <li><a href="{{ url('/mars') }}">Mars Muhammadiyah</a></li>
              </ul>
            </li>
            <li><a href="{{ url('/ekstra')}}">Ekstrakulikuler</a></li>
            <li><a href="{{ url('/galeri') }}">Galeri</a></li>
            <li><a href="{{ url('/berita') }}">Berita</a></li>
            <li class="drop-down"><a href="">Pendaftaran</a>
              <ul>
                <li><a href="ppdb.html">Info Pendaftaran</a></li>
                <li><a href="ppdb.html">Daftar Online</a></li>
              </ul>
            </li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <section id="hero-1">
    <div class="hero1-container" data-aos="fade-up">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <h1>Berita SPEMGALAS</h1>
          </div>
          <div class="col-lg-6" align="center">
            <img src="{{ asset('assets/img/berita-img.png') }}" class="img-fluid" width="250px" alt="">
          </div>
        </div>
      </div>
    </div>
    
    
    
</section>    

<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb shadow p-3 mb-5 bg-white rounded">
          <li class="breadcrumb-item"><a href="#">Profile</a></li>
          <li class="breadcrumb-item active" aria-current="page">Berita</li>
        </ol>
      </nav>
</div>


  <main id="main">

    <section id="section-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                  <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                    <div class="uk-card-media-left uk-cover-container">
                        <img src="./assets/img/gal-4.png" alt="" uk-cover>
                        <canvas width="600" height="400"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body">
                            <a href="{{url('/show-berita')}}"><h3 class="uk-card-title">PPDB SMP AL HIKMAH 2020-2021</h3></a>
                            <p>Informasi Penerimaan Peserta Didik Baru SMP 
                              Muhammadiyah 13 Surabaya 2020-2021</p>

                              <hr>
                              <small class="ml-3"><i class="icofont-calendar" style="color: #3B519C;"></i>&nbsp; 26 April 2020</small>
                        </div>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                  <div class="uk-card-media-left uk-cover-container">
                      <img src="./assets/img/gal-5.png" alt="" uk-cover>
                      <canvas width="600" height="400"></canvas>
                  </div>
                  <div>
                      <div class="uk-card-body">
                          <h3 class="uk-card-title">TRY OUT DIAGNOSTIK KELAS IX SMP</h3>
                          <p>Tryout Diagnotik kelas IX bertujuan untuk mengetahui sejak 
                            awal ketuntasan indikator soal-soal UNBK (Ujian Nasional 
                            Berbasis Komputer) sehingga peserta didik memiliki kesiapan 
                            baik mental maupun materi sebelum menghadapi UNBK. </p>

                            <hr>
                            <small class="ml-3"><i class="icofont-calendar" style="color: #3B519C;"></i>&nbsp; 26 April 2020</small>
                      </div>
                  </div>
              </div>

              <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                <div class="uk-card-media-left uk-cover-container">
                    <img src="./assets/img/gal-2.png" alt="" uk-cover>
                    <canvas width="600" height="400"></canvas>
                </div>
                <div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">TRY OUT DIAGNOSTIK KELAS IX SMP</h3>
                        <p>Tryout Diagnotik kelas IX bertujuan untuk mengetahui sejak 
                          awal ketuntasan indikator soal-soal UNBK (Ujian Nasional 
                          Berbasis Komputer) sehingga peserta didik memiliki kesiapan 
                          baik mental maupun materi sebelum menghadapi UNBK. </p>

                          <hr>
                          <small class="ml-3"><i class="icofont-calendar" style="color: #3B519C;"></i>&nbsp; 26 April 2020</small>
                    </div>
                </div>
            </div>

            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
              <div class="uk-card-media-left uk-cover-container">
                  <img src="./assets/img/gal-6.png" alt="" uk-cover>
                  <canvas width="600" height="400"></canvas>
              </div>
              <div>
                  <div class="uk-card-body">
                      <h3 class="uk-card-title">TRY OUT DIAGNOSTIK KELAS IX SMP</h3>
                      <p>Tryout Diagnotik kelas IX bertujuan untuk mengetahui sejak 
                        awal ketuntasan indikator soal-soal UNBK (Ujian Nasional 
                        Berbasis Komputer) sehingga peserta didik memiliki kesiapan 
                        baik mental maupun materi sebelum menghadapi UNBK. </p>

                        <hr>
                        <small class="ml-3"><i class="icofont-calendar" style="color: #3B519C;"></i>&nbsp; 26 April 2020</small>
                  </div>
              </div>
          </div><br><br>

          <nav aria-label="Page navigation example">
            <ul class="pagination d-flex justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">«</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">»</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>

                </div>

                <div class="col-lg-4">
                  <input class="form-control" type="text" placeholder="Search ..."><br>
                  <div class="card">
                    <div class="card-body">
                      <h6 style="font-weight: 500;">
                        Berita Terbaru
                        <div class="border-1 mt-2" style="border: 2px solid #3B519C; width: 40px;"></div>
                      </h6>
                      <a href="#" class="berita-terbaru"> PPDB SMP Muhammadiyah 13 2020-2021</a><br>
                      <a href="#" class="berita-terbaru"> PPDB SMP Muhammadiyah 13 2020-2021</a><br>
                      <a href="#" class="berita-terbaru"> PPDB SMP Muhammadiyah 13 2020-2021</a><br>
                      <a href="#" class="berita-terbaru"> PPDB SMP Muhammadiyah 13 2020-2021</a>
                    </div>
                  </div><br>
                  
                  <div class="card">
                    <div class="card-body">
                      <h4 style="font-weight: 500;">
                        Feed Instagram SPEMGALAS
                        <div class="border-2 mt-2" style="border: 2px solid #3B519C; width: 40px;"></div>
                      </h4>
                      <div class="row">
                        <div class="col">
                          <img src="./assets/img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="col">
                          <strong>smp muhammadiyah 13 surabaya</strong>
                          <p>@smpmuh13sby</p>
                          <a href="https://www.instagram.com/smpmuh13sby/" target="blank" class="btn" style="background-color: #3B519C; color: #fff;">Follow</a>
                        </div>
                      </div>
                    </div>
                    <a href="https://www.instagram.com/smpmuh13sby/" target="blank">
                      <img src="./assets/img/feed.png" class="img-fluid mt-3" style="width: 100%;" alt="">
                    </a>
                  </div>

                </div>
            </div>
        </div>

    </section>

</main>
  

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">
        <div class="row">
          <div class="col-sm-4" align="left">
            <img src="{{ asset('./assets/img/logo-2.png')}}" class="img-fluid" alt="">
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
            <p><i class="icofont-location-arrow"></i> Jl. Tambak Segaran No. 27 Surabaya<br/>
               <i class="icofont-phone"></i> 031-3772661 <br/>
               <i class="icofont-envelope"></i> smpmuh_13sby@yahoo.com</p>
          </div>
        </div>
      </div>

    </footer><!-- End Footer -->
        <div class="akhir" align="center">
          <small class="mt-1">2020 © All Rights Reserved Design By @Tim Elit</small>
        </div>

  <a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{ asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
  <!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.3/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.3/dist/js/uikit-icons.min.js"></script>

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
  <script src="{{ asset('assets/js/main.js')}}"></script>

</body>

</html>