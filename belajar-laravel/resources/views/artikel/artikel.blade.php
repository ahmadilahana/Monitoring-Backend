@extends("layout.app")


@section('conten')
<h1>Artikel</h1>
<div class="row">
      @foreach ($artikels as $item)
        <div class="card m-2" style="width: 45%">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <p><a href="/artikel/{{$item['id']}}" class="text-decoration-none"><strong>Judul: {{$item['judul']}}</strong></a></p>
                    <p>kategori</p>
                </div>
                <p class="text-truncate2" style="-webkit-line-clamp: 2;">{{$item['subject']}}</p>
            </div>
        </div>
        @endforeach
</div>
<div class="container mt-5 d-flex justify-content-center">

    {{ $artikels->links('vendor.pagination.pagination') }}

</div>
@endsection