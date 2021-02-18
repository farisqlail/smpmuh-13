@extends('admin.layouts')

@section('content-admin')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Berita</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Berita</h6>
            </div>
            <div class="card-body">

            <form action="{{ route('frontend.berita-admin.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                    <div class="form-goup">
                        <label for="">Judul Berita</label>
                            <input type="text" name="judul" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi Berita</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" required rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Gambar</label>
                        <input type="file" class="form-control-file" required name="image" id="">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary float-right" value="save" type="submit">Tambah</button>
                    </div>
                   
                </form>

            </div>
        </div>

    </div>
    
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        var options = {
          filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
          filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
          filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
          filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
    <script>
        CKEDITOR.replace( 'deskripsi', options );
    </script>
@endsection