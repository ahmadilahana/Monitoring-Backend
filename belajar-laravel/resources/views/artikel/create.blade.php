@extends('layout.app')

@section('conten')
    <h1>Buat Artikel Baru</h1>

    <form action="/artikel" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <textarea class="form-control" name="subject" id="subject" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

@endsection