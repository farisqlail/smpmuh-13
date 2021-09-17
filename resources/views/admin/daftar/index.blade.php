@extends('admin.layouts')

@section('content-admin')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pendaftaran</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Galeri</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="tableDaftar">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Alamat Lengkap</th>
                            <th>Asal Sekolah</th>
                            <th>Nama Ayah</th>
                            <th>No Hp Ayah</th>
                            <th>Action</th>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Alamat Lengkap</th>
                            <th>Asal Sekolah</th>
                            <th>Nama Ayah</th>
                            <th>No Hp Ayah</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($daftar as $dft)
                        <tr>
                           <td>{{ $dft->name }}</td>
                           <td>{{ $dft->address }}</td>
                           <td>{{ $dft->from }}</td>
                           <td>{{ $dft->father }}</td>
                           <td>{{ $dft['number-father'] }}</td>
                           <td>
                               <a href="{{ route('frontend.daftar.show', $dft) }}" class="btn btn-primary">Lihat Detail</a>
                           </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection

@push('script')

    <script>
        $(document).ready(function() {
            $('#tableDaftar').DataTable();
        });

    </script>

@endpush