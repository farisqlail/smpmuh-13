@extends('admin.layouts')

@section('content-admin')

<div class="container-fluid">

    <div class="card">
        <div class="card-body">
            <form action="{{ route('frontend.kontak.update', $kontak) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $kontak->email }}">
                </div>

                <div class="form-group">
                    <label for="">No Telpon</label>
                    <input type="text" class="form-control" name="telp" placeholder="{{ $kontak->telp }}">
                </div>

                <div class="form-group">
                    <label for="">Alamat Lengkap</label>
                    <input type="text" class="form-control" name="alamat" placeholder="{{ $kontak->alamat }}">
                </div>


                <div class="form-group">
                    <button class="btn btn-primary" type="submit" value="save">Update</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
