@extends('layout.app')

@section('title', 'Buat Artikel')

@section('content')
<div class="container">
    <h1>Buat Artikel Baru</h1>

    <form action="/artikel/store" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" id="title" class="form-control w-25">
        </div>
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <br>
            <select class="custom-select w-25 form-control" name="kategori" id="kategori">
                <option value="" selected>Pilih Kategori</option>
                @foreach ($kategori as $item)
                    <option value="{{ $item['id'] }}">{{ $item['kategori'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <textarea class="form-control" style="min-height: 250px; max-height: auto" name="subject" id="subject"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection