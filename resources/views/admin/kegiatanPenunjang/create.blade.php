@extends('admin.layouts')

@section('content-admin')

<div class="container-fluid">

    <div class="card">
        <div class="card-body">
            <form action="{{ route('frontend.kegiatanPenunjang-admin.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Nama Kegiatan</label>
                    <input type="text" class="form-control" name="nama_kegiatan" placeholder="Nama Kegiatan Penunjang">
                </div>

                <div class="form-group" align="right">
                    <button class="btn btn-primary" type="submit" value="save">Tambah</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
