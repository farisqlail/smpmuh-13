@extends('admin.layouts')

@section('content-admin')
<!-- Begin Page Content -->
<div class="container-fluid">

 
   
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
