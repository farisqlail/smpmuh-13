@extends('admin.layouts')

@section('content-admin')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">Edit Foto</h1>


        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('frontend.beranda.update', $beranda) }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Gambar Banner</label>
                            <input type="file" class="form-control-file" required name="imageBanner" id="">
                        </div>
                        

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Gambar Kenal Lebih Dekat</label>
                            <input type="file" class="form-control-file" required name="imageSection2" id="">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Gambar Gudang Prestasi</label>
                            <input type="file" class="form-control-file" required name="imageSection3" id="">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary float-right" type="submit" value="save">Update</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('visi');
        CKEDITOR.replace('misi');
    </script>
@endsection
