@extends('Frontend.layouts')

@section('content')
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

        <div class="container mb-3" data-aos="fade-up">
            <h4 align="center">Form Pendaftaran</h4><br>
            <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="border:none;">
                <div class="card-body">

                    <form action="{{ route('frontend.daftar.store') }}" id="formDaftar" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <p>{{ $errors->first('name') }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group has-feedback{{ $errors->has('address') ? ' has-error' : '' }}">
                                    <label>Alamat Lengkap</label>
                                    <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                            <p>{{ $errors->first('address') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group has-feedback{{ $errors->has('city') ? ' has-error' : '' }}">
                                    <label>Kota Lahir</label>
                                    <input type="text" class="form-control" name="city" value="{{ old('city') }}">
                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                            <p>{{ $errors->first('city') }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group has-feedback{{ $errors->has('birth') ? ' has-error' : '' }}">
                                    <label>Tanggal Lahir</label>
                                    <div class="input-group date" id="datetimepicker2">
                                        <input type="text" name="birth" class="form-control"><span
                                            class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    @if ($errors->has('birth'))
                                        <span class="help-block">
                                            <p>{{ $errors->first('birth') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group has-feedback{{ $errors->has('from') ? ' has-error' : '' }}">
                            <label>Asal Sekolah</label>
                            <input type="text" class="form-control" name="from">
                            @if ($errors->has('from'))
                                <span class="help-block">
                                    <p>{{ $errors->first('from') }}
                                </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group has-feedback{{ $errors->has('father') ? ' has-error' : '' }}">
                                    <label>Nama Ayah</label>
                                    <input type="text" class="form-control" name="father">
                                    @if ($errors->has('father'))
                                        <span class="help-block">
                                            <p>{{ $errors->first('father') }}
                                        </span>
                                    @endif
                                </div>

                                <div
                                    class="form-group has-feedback{{ $errors->has('number-father') ? ' has-error' : '' }}">
                                    <label>Nomor HP Ayah</label>
                                    <input type="tel" class="form-control" name="number-father">
                                    @if ($errors->has('number-father'))
                                        <span class="help-block">
                                            <p>{{ $errors->first('number-father') }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group has-feedback{{ $errors->has('mother') ? ' has-error' : '' }}">
                                    <label>Nama Ibu</label>
                                    <input type="text" class="form-control" name="mother">
                                    @if ($errors->has('mother'))
                                        <span class="help-block">
                                            <p>{{ $errors->first('mother') }}
                                        </span>
                                    @endif
                                </div>

                                <div
                                    class="form-group has-feedback{{ $errors->has('number-mother') ? ' has-error' : '' }}">
                                    <label>Nomor HP Ibu</label>
                                    <input type="tel" class="form-control" name="number-mother">
                                    @if ($errors->has('number-mother'))
                                        <span class="help-block">
                                            <p>{{ $errors->first('number-father') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="mt-3" align="center">
                            <button type="submit" id="btnDaftar" class="btn btn-komentar">Daftar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </main>

@endsection
