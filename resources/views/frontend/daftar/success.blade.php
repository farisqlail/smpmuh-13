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

    
    <section id="verif-section" class="verif-section">
        <div class="container">
            <div class="ilus" align="center">
                <img src="{{ asset('assets/img/success.png') }}" width="400px" class="img-fluid" alt="">
                <h2>Pendaftaran Selesai Segera Konfirmasi Ke WA ini</h2>
                <a href="https://wa.me/085646482325" id="success" target="blank" class="btn btn-verif mt-3">Konfirmasi</a>
                <a href="{{ url('/') }}" class="btn btn-verif-2 ml-2 mt-3">Selesai Konfirmasi</a>
                {{-- <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                </form> --}}
            </div>

        </div>
    </section>
    
{{-- </footer><!-- End Footer -->
<div class="akhir" align="center">
    <small class="mt-1">2020 © All Rights Reserved Design By @Tim Elit</small>
</div> --}}

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

    $(document).ready(function() {
            $('#sucess').on('click', function() {
                window.location='{{ URL::route('frontend.welcome') }}';
            });
        });
</script>

</body>

</html>