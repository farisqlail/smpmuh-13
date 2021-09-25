@extends('admin.layouts')

@section('content-admin')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">Edit Link PPDB</h1>


            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('frontend.ppdb.update', $ppdb) }}" method="POST"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            
                            <div class="form-group">
                                <label for="">Link PPDB</label>
                                <input type="text" class="form-control" name="link" placeholder="{{ $ppdb->link }}">
                            </div>

                                <div class="form-group">
                                    <button class="btn btn-primary float-right" type="submit" value="save">Update</button>
                                </div>
                        </form>
                    </div>
                </div>

            </div>

        @endsection
