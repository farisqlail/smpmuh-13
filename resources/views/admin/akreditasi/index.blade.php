@extends('admin.layouts')

@section('content-admin')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Akreditasi</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <h4>Akreditasi</h4>
                <p>
                    {!! $akreditasi[0]->deskripsi !!}
                </p><br>


                <a href="{{ route('frontend.akreditasi.edit', $akreditasi[0]->id) }}" class="btn btn-info float-right">Edit</a>
            </div>
        </div>

    </div>
@endsection