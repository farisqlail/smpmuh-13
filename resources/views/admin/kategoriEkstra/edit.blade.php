@extends('admin.layouts')

@section('content-admin')

<div class="container-fluid">

    <div class="card">
        <div class="card-body">
            <form action="{{ route('frontend.kategoriEkstra.update', $kategoriEkstra) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <div class="form-group">
                    <label for="">Nama Kategori</label>
                    <input type="text" class="form-control" name="nama_kategori" value="{{ $kategoriEkstra->nama_kategori }}">
                </div>

                <div class="form-group" align="right">
                    <button class="btn btn-primary" type="submit" value="save">Update</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
