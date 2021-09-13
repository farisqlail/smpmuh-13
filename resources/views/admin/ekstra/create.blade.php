@extends('admin.layouts')

@section('content-admin')

    <div class="container-fluid">

        <div class="card">
            <div class="card-body">
                <form action="{{ route('frontend.ekstra-admin.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{-- {{ method_field('PATCH') }} --}}

                    <div class="form-group">
                        <select class="form-control" name="kategori_id">
                            <option>Pilih Kategori</option>
                            @foreach ($kategoriEkstra as $kate)
                                <option value="{{ $kate->id }}">{{ $kate->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Nama Ekstrakurikuler</label>
                        <input type="text" class="form-control" name="nama_ekstra" placeholder="Nama Ekstrakurikuler">
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi Ekstrakurikuler</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" required rows="3"></textarea>
                    </div>

                    <div class="form-group" align="right">
                        <button class="btn btn-primary" type="submit" value="save">Tambah</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('deskripsi', options);
    </script>
@endsection
