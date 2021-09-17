@extends('admin.layouts')

@section('content-admin')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Beasiswa</h1>
            <a href="{{ route('frontend.beasiswa-admin.create') }}"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Beasiswa</a>
        </div>

        <div class="card">
            <div class="card-body">
                <h3>Foto Beasiswa</h3>
                @if ($deskBeasiswa[0]->image == null)
                    <div class="image-null" align="center">
                        <img src="http://mundalodge.com/images/joomlart/demo/default.jpg" class="img-fluid">
                    </div>
                @else
                    <div class="image-null" align="center">
                        <img src="{{ asset('storage/' . $deskBeasiswa[0]->image) }}" class="img-fluid">
                    </div>
                @endif
                <br>
                {{ $deskBeasiswa[0]['keterangan'] }}

                <a href="{{ route('frontend.deskripsiBeasiswa.edit', $deskBeasiswa[0]->id) }}" class="btn btn-info float-right">Edit</a>
            </div>
        </div>


        <!-- DataTales Example -->
        <div class="card shadow mb-4 mt-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Beasiswa</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tableBeasiswa">
                        <thead>
                            <tr>
                                <th>Nama Beasiswa</th>
                                <th>Deskripsi</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama Beasiswa</th>
                                <th>Deskripsi</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($beasiswa as $bsw)
                                <tr>
                                    <td>{{ $bsw->namaBeasiswa }}</td>
                                    <td>{{ $bsw->deskripsi }}</td>
                                    <td>
                                        <a href="{{ route('frontend.beasiswa.edit', $bsw) }}"
                                            class="btn btn-primary">Edit</a>

                                        <a href="{{ route('frontend.beasiswa.delete', $bsw->id) }}"
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
                $('#tableBeasiswa').DataTable();
            });
        </script>

    @endpush
