@extends('frontend.layouts')

@section('content')

    <div class="container" style="margin-top: 40px; margin-bottom: 40px;">
        <h2>{{ $ekstra->nama_ekstra }}</h2>
        <p>
            {!! $ekstra->deskripsi !!}
        </p>
    </div>

@endsection
