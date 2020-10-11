@extends('admin.layouts')

@section('content-admin')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Galeri</h1><br>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Galeri</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Gambar</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Judul</th>
                            <th>Gambar</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        {{-- @foreach ($berita as $brt) --}}
                        <tr>
                           <td></td>
                           <td></td>
                           </td>
                                {{-- <a href="{{ route('admin.berita.edit', $brt) }}" class="btn btn-success">Show</a>

                                <a href="{{ route('admin.berita.edit', $brt) }}" class="btn btn-primary">Edit</a>

                                <a href="{{ route('admin.berita.delete', $brt->id) }}" class="btn btn-danger">Delete</a> --}}

                            </td>
                        </tr>
                        {{-- @endforeach --}}

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
