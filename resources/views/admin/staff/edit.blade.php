@extends('admin.layouts')

@section('content-admin')

    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Staff</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Staff</h6>
            </div>
            <div class="card-body">

            <form action="{{ route('admin.staff.update', $staff) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                    <div class="form-goup">
                        <label for="">Nama Lengkap</label>
                            <input type="text" name="name" value="{{ $staff->name }}" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Jabatan</label>
                        <input type="text" name="jabatan" value="{{ $staff->jabatan }}" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Foto</label>
                        <input type="file" class="form-control-file" name="image" required>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary float-right" value="save" type="submit">Tambah</button>
                    </div>
                   
                </form>

            </div>
        </div>

    </div>

@endsection