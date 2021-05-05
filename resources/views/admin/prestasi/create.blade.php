@extends('admin.layouts')

@section('content-admin')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">Tambah Data Prestasi Siswa</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Prestasi Siswa</h6>
            </div>


        <div class="card">
            <div class="card-body">
                <form action="{{ route('frontend.prestasi-admin.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="">Nama Lengkap Siswa</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama lengkap siswa">
                    </div>

                    <div class="form-group">
                        <label for="">Kelas Siswa</label>
                        <input type="text" class="form-control" name="kelas" placeholder="Kelas siswa">
                    </div>

                    <div class="form-group">
                        <label for="">Nama Prestasi</label>
                        <input type="text" class="form-control" name="namaAcara" placeholder="Nama Prestasi">
                    </div>

                    <div class="form-group">
                        <label for="">Kelas Siswa</label>
                        <select name="jenis" class="form-control" id="">
                            <option value="akademik">Akademik</option>
                            <option value="non akademik">Non Akademik</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi Prestasi</label>
                        <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Foto Siswa</label>
                        <input type="file" class="form-control-file" required name="image" id="">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary float-right" type="submit" value="save">Tambah</button>
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
