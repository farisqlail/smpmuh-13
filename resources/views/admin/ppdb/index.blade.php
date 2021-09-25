@extends('admin.layouts')

@section('content-admin')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Link PPDB</h1>
        </div>

        <div class="card">
            <div class="card-body">

                <div class="container">
                    <div class="row">
                        <div class="col-m-2">
                            Link Pendaftaran &nbsp;
                        </div>
                        <div class="col-m-10">
                            : <a href="{{ $ppdb->link }}" target="blank">{{ $ppdb->link }}</a>
                        </div>
                    </div>

                    <a href="{{ route('frontend.ppdb.edit', $ppdb) }}" class="btn btn-primary float-right">Edit Link</a>
                </div>

            </div>
        </div>

    </div>
@endsection
