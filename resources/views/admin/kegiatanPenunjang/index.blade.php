@extends('admin.layouts')

@section('content-admin')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Kegiatana Penunjang</h1>
            <a href="{{ route('frontend.kegiatanPenunjang-admin.create') }}"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Kegiatan Penunjang</a>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <h4>Deskripsi Kegiatan Penunjang</h4><br>
                @if ($deskripsiKegiatan[0]->image == null)
                    <div class="image-null" align="center">
                        <img src="http://mundalodge.com/images/joomlart/demo/default.jpg" class="img-fluid" width="500">
                    </div>
                @else
                    <div class="image-null" align="center">
                        <img src="{{ asset('storage/' . $deskripsiKegiatan[0]->image) }}" class="img-fluid" width="500">
                    </div>
                @endif

                <br><br>

                <p>
                    {!! $deskripsiKegiatan[0]->deskripsi !!}
                </p>
                <div align="right">
                    <a href="{{ route('frontend.deskripsiKegiatan.edit', $deskripsiKegiatan[0]->id) }}"
                        class="btn btn-primary mt-3">Edit</a>
                </div>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Kegiatana Penunjang</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tableKegiatanPenunjang">
                        <thead>
                            <tr>
                                <th>Kegiatana Penunjang</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>kategori Ekstrakurikuler</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($kegiatanPenunjang as $kp)
                                <tr>
                                    <td>{{ $kp->nama_kegiatan }}</td>
                                    <td>
                                        <a href="{{ route('frontend.kegiatanPenunjang.edit', $kp) }}"
                                            class="btn btn-primary">Edit</a>

                                        <a href="{{ route('frontend.kegiatanPenunjang.delete', $kp->id) }}"
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
                $('#tableKegiatanPenunjang').DataTable();
            });

        </script>

    @endpush
