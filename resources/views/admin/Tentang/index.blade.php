@extends('admin.layouts')

@section('content-admin')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Prestasi Siswa</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <h4>Tentang Sekolah</h4>

                @if ($tentang[0]->image == null)
                    <div class="image-null" align="center">
                        <img src="http://mundalodge.com/images/joomlart/demo/default.jpg" class="img-fluid">
                    </div>
                @else
                    <div class="image-null" align="center">
                        <img src="{{ asset('storage/' . $tentang[0]->image) }}" class="img-fluid" width="800">
                    </div>
                @endif
                <br>

                <p>
                    {!! $tentang[0]->deskripsi !!}
                </p>
                <a href="{{ route('frontend.tentang.edit', $tentang[0]->id) }}" class="btn btn-info float-right">Edit</a>
            </div>
        </div>

        <br>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Karakter yang dibangun</h1>
            <a href="{{ route('frontend.karakter-admin.create') }}"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah Karakter</a>
        </div>

        <div class="row">
            @foreach ($karakter as $krtr)
                <div class="col-md-4">
                    <div class="card mt-3">
                        <div class="card-body">
                            <h6><b>{{ $krtr->namaKarakter }}</b></h6>
                            <p>
                                {!! $krtr->deskripsiKarakter !!}
                            </p>

                            <div align="right">
                                <a href="{{ route('frontend.karakter.edit', $krtr) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('frontend.karakter.delete', $krtr) }}" class="btn btn-danger ">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

@push('script')

    <script>
        $(document).ready(function() {
            $('#tablePrestasi').DataTable();
        });

    </script>

@endpush
