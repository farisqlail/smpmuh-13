@extends('admin.layouts')

@section('content-admin')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Prestasi Siswa</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <h4>Tentang Sekolah</h4>
            <p>
                {{ $tentang[0]->deskripsi }}
            </p>
            <a href="{{ route('frontend.tentang.editTentang', $tentang[0]->id) }}" class="btn btn-info float-right">Edit</a>
        </div>
    </div>

    <br>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Karakter yang dibangun</h1>
        <a href="{{ route('frontend.tentang-admin.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Karakter</a>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card mt-3">
                <div class="card-body">
                    <h6><b>Nama Karakter</b></h6>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta molestias nemo ipsa ullam quas nihil voluptatem, dolor voluptates quis sequi voluptate nisi expedita numquam harum molestiae commodi ab? Obcaecati, nulla?
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-3">
                <div class="card-body">
                    <h6><b>Nama Karakter</b></h6>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta molestias nemo ipsa ullam quas nihil voluptatem, dolor voluptates quis sequi voluptate nisi expedita numquam harum molestiae commodi ab? Obcaecati, nulla?
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-3">
                <div class="card-body">
                    <h6><b>Nama Karakter</b></h6>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta molestias nemo ipsa ullam quas nihil voluptatem, dolor voluptates quis sequi voluptate nisi expedita numquam harum molestiae commodi ab? Obcaecati, nulla?
                    </p>
                </div>
            </div>
        </div> 
    </div>
   
</div>
<!-- /.container-fluid -->
@endsection

@push('script')

    <script>
        $(document).ready(function() {
            $('#tablePrestasi').DataTable();
        });

    </script>

@endpush
