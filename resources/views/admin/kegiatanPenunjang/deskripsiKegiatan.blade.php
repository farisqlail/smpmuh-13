@extends('admin.layouts')

@section('content-admin')

<div class="container-fluid">

    <div class="card">
        <div class="card-body">
            <form action="{{ route('frontend.deskripsiKegiatan.update', $deskripsiKegiatan) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <div class="form-group">
                    <label for="">Nama Kegiatan</label>
                    <textarea class="form-control" name="deskripsi" rows="3">{{ $deskripsiKegiatan->deskripsi }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Foto Deskripsi</label>
                    <input type="file" class="form-control-file" required name="image" id="">
                </div>

                <div class="form-group" align="right">
                    <button class="btn btn-primary" type="submit" value="save">Update</button>
                </div>
            </form>
        </div>
    </div>

</div>

<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'deskripsi' );
    </script>
@endsection
