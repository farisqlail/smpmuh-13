@extends('admin.layouts')

@section('content-admin')

<div class="container-fluid">

    <div class="card">
        <div class="card-body">
            <form action="{{ route('frontend.beasiswa-admin.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Nama Beasiswa</label>
                    <input type="text" class="form-control" name="namaBeasiswa" placeholder="Nama Beasiswa">
                </div>

                <div class="form-group">
                    <label for="">Deskripsi Beasiswa</label>
                    <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary float-right" type="submit" value="save">Tambah</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection