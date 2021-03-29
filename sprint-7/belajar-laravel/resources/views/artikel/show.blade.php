@extends("layout.app")

@section('title', 'Daftar Artikel')

@section('content')
<div class="d-flex flex-column mt-3">
    <h2 class="text-center">{{$data['judul']}}</h2>
    <p class="mt-3">{{$data['subject']}}</p>
    <a href="/artikel" class="btn btn-info col-2 mt-5">Kembali</a>
</div>
@endsection