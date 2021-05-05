@extends('admin.layouts')

@section('content-admin')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Visi Misi</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <h4>Visi</h4>
                <p>
                    {!! $visi[0]->visi !!}
                </p><br>

                <h4>Misi</h4>
                <p>
                    {!! $visi[0]->misi !!}
                </p><br>

                <a href="{{ route('frontend.visi.edit', $visi[0]->id) }}" class="btn btn-info float-right">Edit</a>
            </div>
        </div>

    </div>
@endsection