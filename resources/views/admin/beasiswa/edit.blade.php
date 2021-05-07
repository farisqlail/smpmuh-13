@extends('admin.layouts')

@section('content-admin')

<div class="container-fluid">

    <div class="card">
        <div class="card-body">
            <form action="{{ route('frontend.beasiswa-admin.update', $beasiswa) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <div class="form-group">
                    <label for="">Nama Beasiswa</label>
                    <input type="text" class="form-control" name="namaBeasiswa" value="{{ $beasiswa->namaBeasiswa }}">
                </div>

                <div class="form-group">
                    <label for="">Deskripsi Beasiswa</label>
                    <textarea class="form-control" name="deskripsi" rows="3">{{ $beasiswa->deskripsi }}</textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary float-right" type="submit" value="save">Edit</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection