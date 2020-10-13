@extends('admin.layouts')

@section('content-admin')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">


        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Artikel</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $beritaCount }} Artikel</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Staf</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $staffCount }} Staff</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Galeri</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $galeriCount }} Foto</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-images fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
        <h1 class="h3 mb-0 text-gray-800">Cerita Terbaru</h1>
    </div>

    {{-- Card --}}
    <div class="row">
        <div class="col-lg-6 mb-4">

            @foreach($berita as $brt)
            <div class="card shadow mb-4">
                <div class="card-header bg-dark py-3">
                    <h6 class="m-0 font-weight-bold text-white">{{ $brt->judul }}</h6>
                </div>
                <div class="card-body">
                    @php
                      echo Str::limit($brt->deskripsi, 50);
                    @endphp
                </div>
            </div>
            @endforeach
        </div>

        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header bg-primary py-3">
                    <h6 class="m-0 font-weight-bold text-white">Data Terbaru</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{ asset('sb-admin/img/undraw_posting_photo.svg')}}" alt="">
                    </div>
                    <p>Data terbaru dari teman kita yang ingin menceritakan tentang apa yang diarasakan. Ayo dengarkan mereka.</a>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
