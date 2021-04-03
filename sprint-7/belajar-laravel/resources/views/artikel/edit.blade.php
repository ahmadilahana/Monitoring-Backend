@extends('layout.app')

@section('title', 'Edit Artikel')

@section('content')
<div class="container">
    <h1>Edit Artikel</h1>

    <form action="/artikel/update/{{$data['id']}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control w-25" name="title" id="title" value="{{$data['judul']}}">
        </div>
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <br>
            <select class="custom-select w-25 form-control" name="kategori" id="kategori">
                <option value="">Pilih Kategori</option>
                @foreach ($kategori as $item)
                    <option value="{{ $item['id'] }}" @if ($item['id'] == $data['kat_artikel_id'])
                        selected
                    @endif>{{ $item['kategori'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <textarea class="form-control" style="min-height: 250px; max-height: auto" name="subject" id="subject">{{$data['subject']}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
</div>
@endsection