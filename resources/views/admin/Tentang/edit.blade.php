@extends('admin.layouts')

@section('content-admin')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edita Data Prestasi Siswa</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edita Data Prestasi Siswa</h6>
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
