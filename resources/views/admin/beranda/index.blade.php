@extends('admin.layouts')

@section('content-admin')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Foto Beranda</h1>
        </div>

        <div class="card">
            <div class="card-body">

                <h3>Gambar Banner</h3>
                <small><i>Gambar jangan lebih dari 2mb</i></small>
                @if ($beranda[0]->imageBanner == null)
                    <div class="image-null" align="center">
                        <img src="http://mundalodge.com/images/joomlart/demo/default.jpg" class="img-fluid" width="400px">
                    </div>
                @else
                    <div class="image-null" align="center">
                        <img src="{{ asset('storage/' . $beranda[0]->imageBanner) }}" class="img-fluid">
                    </div>
                @endif
                <br>

                <h3 class="mt-4">Gambar Kenal Lebih Dekat</h3>
                <small><i>Gambar jangan lebih dari 2mb</i></small>
                @if ($beranda[0]->imageSection2 == null)
                    <div class="image-null" align="center">
                        <img src="http://mundalodge.com/images/joomlart/demo/default.jpg" class="img-fluid" width="400px">
                    </div>
                @else
                    <div class="image-null" align="center">
                        <img src="{{ asset('storage/' . $beranda[0]->imageSection2) }}" class="img-fluid">
                    </div>
                @endif
                <br>

                <h3 class="mt-4">Gambar Gudang Prestasi</h3>
                <small><i>Gambar jangan lebih dari 2mb</i></small>
                @if ($beranda[0]->imageSection3 == null)
                    <div class="image-null" align="center">
                        <img src="http://mundalodge.com/images/joomlart/demo/default.jpg" class="img-fluid" width="400px">
                    </div>
                @else
                    <div class="image-null" align="center">
                        <img src="{{ asset('storage/' . $beranda[0]->imageSection3) }}" class="img-fluid">
                    </div>
                @endif
                <br>

                <a href="{{ route('frontend.beranda.edit', $beranda[0]->id) }}" class="btn btn-info float-right">Edit</a>
            </div>
        </div>

    </div>
@endsection
