@extends('admin.layouts')

@section('content-admin')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Kontak</h1>
            <!-- <a href="{{ route('frontend.staff-admin.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Staff</a> -->
        </div>

        <div class="card">
            <div class="card-body">
                <h6 class="text-dark"><b>Data Kontak</b></h6>
                No Telp : <span>{{ $kontak[0]->telp }}</span><br>
                Email : <span>{{ $kontak[0]->email }}</span><br>
                Alamat : <span>{{ $kontak[0]->alamat }}</span>

                <div align="right">
                    <a href="{{ route('frontend.kontak.edit', $kontak[0]->id) }}" class="btn btn-primary mt-3">Edit</a>

                </div>
            </div>
        </div>
    </div>


@endsection
