@extends('admin.layouts')

@section('content-admin')

<div class="container-fluid">

    <div class="card">
        <div class="card-body">
            <form action="{{ route('frontend.alumni-admin.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                </div>

                <div class="form-group">
                    <label for="">Testimoni</label>
                    <textarea class="form-control" name="testimoni" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Foto Alumni</label>
                    <input type="file" class="form-control-file" required name="image" id="">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary float-right" type="submit" value="save">Tambah</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection