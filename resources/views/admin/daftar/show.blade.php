@extends('admin.layouts')

@section('content-admin')

    <div class="card">
        <div class="card-body">
            <h3>Detail Data Siswa Baru</h3>
            <br>
            <div class="row">
                <div class="col-sm-2">
                    Nama 
                </div>
                <div class="col-sm-10">
                    : {{ $daftar->name }}
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    Alamat Lengkap 
                </div>
                <div class="col-sm-10">
                    : {{ $daftar->address }} 
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-2">
                    Kota Lahir 
                </div>
                <div class="col-sm-10">
                    : {{ $daftar->city }}
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    Tanggal Lahir
                </div>
                <div class="col-sm-10">
                    : {{ $daftar->birth }}
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    Asal Sekolah
                </div>
                <div class="col-sm-10">
                    : {{ $daftar->from }}
                </div>
            </div>
              
            <div class="row">
                <div class="col-sm-2">
                    Nama Ayah
                </div>
                <div class="col-sm-10">
                    : {{ $daftar->father }}
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    Nomor Hp
                </div>
                <div class="col-sm-10">
                    : {{ $daftar['number-father'] }}
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    Nama Ibu
                </div>
                <div class="col-sm-10">
                    : {{ $daftar->mother }}
                </div>
            </div>
              
            <div class="row">
                <div class="col-sm-2">
                    Nomor Hp
                </div>
                <div class="col-sm-10">
                    : {{ $daftar['number-mother'] }}
                </div>
            </div>
             

            <div class="float-right mt-2">
                <a href="{{ route('frontend.daftar.delete', $daftar) }}" class="btn btn-danger">Delete</a>
            </div>
        </div>

    </div>

@endsection