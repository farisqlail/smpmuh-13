@extends('admin.layouts')

@section('content-admin')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Kurikulum</h1>
            <!-- <a href="{{ route('frontend.staff-admin.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Staff</a> -->
        </div>

        <div class="card">
            <div class="card-body">

                @if ($kurikulum[0]->image == null)
                    <div class="image-null" align="center">
                        <img src="http://mundalodge.com/images/joomlart/demo/default.jpg" class="img-fluid">
                    </div>
                @else
                    <div class="image-null" align="center">
                        <img src="{{ asset('storage/' . $kurikulum[0]->image) }}" class="img-fluid" width="800">
                    </div>
                @endif
                <br>

                <p>
                    {!! $kurikulum[0]->deskripsi !!}
                </p>

                <div align="right">
                    <a href="{{ route('frontend.kurikulum.edit', $kurikulum[0]->id) }}"
                        class="btn btn-primary mt-3">Edit</a>

                </div>
            </div>
        </div>
    </div>


@endsection
