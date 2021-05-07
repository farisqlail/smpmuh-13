@extends('admin.layouts')

@section('content-admin')

    <div class="container-fluid">

        <div class="card">
            <div class="card-body">
                <form action="{{ route('frontend.desk.update', $desk) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="form-group">
                        <label for="">Deskripsi tentang sekolah</label>
                        <textarea class="form-control" name="deskripsi" rows="3">{{ $desk->deskripsi }}</textarea>
                    </div>

                    <div class="form-group" align="right">
                        <button class="btn btn-primary" type="submit" value="save">Edit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('deskripsi');

    </script>

@endsection
