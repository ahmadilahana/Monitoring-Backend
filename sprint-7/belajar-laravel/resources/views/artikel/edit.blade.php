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
            <input type="text" name="title" id="title" value="{{$data['judul']}}">
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <textarea class="form-control" style="min-height: 250px; max-height: auto" name="subject" id="subject">{{$data['subject']}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
</div>
@endsection