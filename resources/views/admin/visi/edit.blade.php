@extends('admin.layouts')

@section('content-admin')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">Edit Visi Misi</h1>


            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('frontend.visi-admin.update', $visi) }}" method="POST"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <div class="form-group">
                                <label for="">Deskripsi tentang sekolah</label>
                                <textarea class="form-control" name="visi" rows="3">{{ $visi->visi }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="">Deskripsi tentang sekolah</label>
                                <textarea class="form-control" name="misi" rows="3">{{ $visi->misi }}</textarea>
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
                CKEDITOR.replace('visi');
                CKEDITOR.replace('misi');

            </script>
        @endsection
