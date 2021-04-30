@extends('admin.layouts')

@section('content-admin')
<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card">
        <div class="card-body">
            <form action="{{ route('frontend.prestasi-admin.update', $prestasi ) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                
                <div class="form-group">
                    <label for="">Nama Lengkap Siswa</label>
                    <input type="text" class="form-control" name="nama" value="{{ $prestasi->nama }}">
                </div>

                <div class="form-group">
                    <label for="">Kelas Siswa</label>
                    <input type="text" class="form-control" name="kelas" value="{{ $prestasi->kelas }}">
                </div>

                <div class="form-group">
                    <label for="">Nama Prestasi</label>
                    <input type="text" class="form-control" name="namaAcara" value="{{ $prestasi->namaAcara }}"
                </div>

                <div class="form-group">
                    <label for="">Kelas Siswa</label>
                    <select name="jenis" class="form-control" id="">
                        <option value="akademik">Akademik</option>
                        <option value="nonAkademik">Non Akademik</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Deskripsi Prestasi</label>
                    <textarea class="form-control" name="deskripsi" rows="3">{{ $prestasi->deskripsi }}</textarea>
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

@endsection