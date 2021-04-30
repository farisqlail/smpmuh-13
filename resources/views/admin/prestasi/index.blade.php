@extends('admin.layouts')

@section('content-admin')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Prestasi Siswa</h1>
        <a href="{{ route('frontend.prestasi-admin.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Prestasi</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Prestasi Siswa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="tablePrestasi" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Nama Acara</th>
                            <th>Jenis Prestasi</th>
                            <th>Deskripsi Acara</th>
                            <th>Gambar</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Nama Acara</th>
                            <th>Jenis Prestasi</th>
                            <th>Deskripsi Acara</th>
                            <th>Gambar</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($prestasis as $prestasi)
                        <tr>
                            <td>{{ $prestasi->nama }}</td>
                            <td>{{ $prestasi->kelas }}</td>
                            <td>{{ $prestasi->namaAcara }}</td>
                            <td>{{ $prestasi->jenis }}</td>
                            <td>{{ $prestasi->deskripsi }}</td>
                            <td align="center">
                                <img src="{{ asset('storage/'.$prestasi->image) }}" height="90px">
                            </td>
                            <td>

                            <a href="{{ route('frontend.prestasi.edit', $prestasi) }}" class="btn btn-primary">Edit</a>

                            <a href="{{ route('frontend.prestasi.delete', $prestasi->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
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
