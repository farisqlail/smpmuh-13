@extends('admin.layouts')

@section('content-admin')

<div class="container-fluid">

    <div class="card">
        <div class="card-body">
            <form action="{{ route('frontend.ekstra.update', $ekstra) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <div class="form-group">
                    <label for="">Nama Ekstrakurikuler</label>
                    <input type="text" class="form-control" name="nama_ekstra" value="{{ $ekstra->nama_ekstra }}">
                </div>

                <div class="form-group">
                    <select class="form-control" name="kategori_ekstra">
                        <option>Pilih Kategori</option>
                        <option value="Olimpiade">Olimpiade</option>
                        <option value="Kesenian">Kesenian</option>
                        <option value="Olahraga">Olahraga</option>
                        <option value="Kebahasaan">Kebahasaan</option>
                        <option value="Keagamaan">Keagamaan</option>
                      </select>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit" value="save">Tambah</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
