@extends('admin.layouts')

@section('content-admin')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Ekstrakurikuler</h1>
             <a href="{{ route('frontend.ekstra-admin.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Ekstrakurikuler</a> 
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <h4>Deskripsi Ekstrakurikuler</h4>
                {!! $desk[0]->deskripsi !!}

                <div align="right">
                    <a href="{{ route('frontend.desk.edit', $desk[0]->id) }}" class="btn btn-primary mt-3">Edit</a>
                </div>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Ekstrakurikuler</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tableEkstra">
                        <thead>
                            <tr>
                                <th>Nama Ekstra</th>
                                <th>kategori</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama Ekstra</th>
                                <th>kategori</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($ekstra as $eks)
                                <tr>
                                    <td>{{ $eks->nama_ekstra }}</td>
                                    <td>{{ $eks->kategori_ekstra }}</td>
                                    <td>
                                        <a href="{{ route('frontend.ekstra.edit', $eks) }}"
                                            class="btn btn-primary">Edit</a>

                                        <a href="{{ route('frontend.ekstra.delete', $eks->id) }}"
                                            class="btn btn-danger">Delete</a>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection

    @push('script')

        <script>
            $(document).ready(function() {
                $('#tableEkstra').DataTable();
            });

        </script>

    @endpush
