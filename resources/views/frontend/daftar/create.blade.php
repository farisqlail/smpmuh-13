@extends('frontend.layouts')

@section('content')
<section id="hero-1">
    <div class="hero1-container" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <h1>Pendaftaran Siswa Baru</h1>
                </div>
                <div class="col-lg-6" align="center">
                    <img src="{{ asset('assets/img/daftar.png') }}" class="img-fluid" width="250px" alt="">
                </div>
            </div>
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

        <div class="container mb-3" data-aos="fade-up">
            <h4 align="center">Form Pendaftaran</h4><br>
            <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="border:none;">
                <div class="card-body">

                    <form action="{{ route('frontend.daftar.store') }}" id="formDaftar" method="POST">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="name" required>                                   
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Alamat Lengkap</label>
                                    <input type="text" class="form-control" name="address" required>                                    
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Kota Lahir</label>
                                    <input type="text" class="form-control" name="city" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <div class="input-group">
                                        <input type="date" name="birth" class="form-control" required><span
                                            class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Asal Sekolah</label>
                            <input type="text" class="form-control" name="from" required>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nama Lengkap Ayah</label>
                                    <input type="text" class="form-control" name="father" placeholder="contoh : suep ...." required>
                                </div>

                                <div
                                    class="form-group">
                                    <label>Nomor HP Ayah</label>
                                    <input type="tel" class="form-control" name="number-father" placeholder="contoh : 089838...." required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nama Lengkap Ibu</label>
                                    <input type="text" class="form-control" name="mother" placeholder="contoh : titi ...." required>
                                </div>

                                <div
                                    class="form-group">
                                    <label>Nomor HP Ibu</label>
                                    <input type="tel" class="form-control" name="number-mother" placeholder="contoh : 089838...." required>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3" align="center">
                            <button type="submit"  class="btn btn-komentar">Daftar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </main>

@endsection
