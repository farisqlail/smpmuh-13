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
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Alamat Lengkap</th>
                            <th>Kota Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Asal Sekolah</th>
                            <th>Nama Ayah</th>
                            <th>No Hp Ayah</th>
                            <th>Nama Ibu</th>
                            <th>No Hp Ibu</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Alamat Lengkap</th>
                            <th>Kota Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Asal Sekolah</th>
                            <th>Nama Ayah</th>
                            <th>No Hp Ayah</th>
                            <th>Nama Ibu</th>
                            <th>No Hp Ibu</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($daftar as $dft)
                        <tr>
                           <td>{{ $dft->name }}</td>
                           <td>{{ $dft->address }}</td>
                           <td>{{ $dft->city }}</td>
                           <td>{{ $dft->birth }}</td>
                           <td>{{ $dft->from }}</td>
                           <td>{{ $dft->father }}</td>
                           <td>{{ $dft['number-father'] }}</td>
                           <td>{{ $dft->mother }}</td>
                           <td>{{ $dft['number-mother'] }}</td>
                           {{-- <td>
                                <a href="{{ route('frontend.galeri.edit', $glr) }}" class="btn btn-primary">Edit</a>

                                <a href="{{ route('frontend.galeri.delete', $glr->id) }}" class="btn btn-danger">Delete</a> 

                            </td> --}}
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection