@extends('admin.layouts')

@section('content-admin')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">Edit Tentang Sekolah</h1>


            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('frontend.tentang-admin.update', $tentang) }}" method="POST"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <div class="form-group">
                                <label for="">Deskripsi tentang sekolah</label>
                                <textarea class="form-control" name="deskripsi" rows="3">{{ $tentang->deskripsi }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Gambar</label>
                                <input type="file" class="form-control-file" required name="image" id="">
                            </div>

                                <div class="form-group">
                                    <button class="btn btn-primary float-right" type="submit" value="save">Update</button>
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
