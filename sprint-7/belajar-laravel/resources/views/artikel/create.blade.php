@extends('layout.app')

@section('title', 'Buat Artikel')

@section('conten')
    <h1>Buat Artikel Baru</h1>

    <form action="/artikel/store" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <textarea class="form-control" style="min-height: 250px; max-height: auto" name="subject" id="subject"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

@endsection