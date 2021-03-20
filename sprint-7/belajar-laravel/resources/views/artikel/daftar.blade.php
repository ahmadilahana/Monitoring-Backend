@extends("layout.app")

@section('title', 'Daftar Artikel')

@section('conten')
<h1>Daftar Artikel</h1>
<a href="/artikel/create" class="btn btn-primary mb-3">Buat Artikel</a>
<table class="table w-100">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Subject</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php $n = 1;?>
    @foreach ($artikels as $item)
        <tr class="">
            <th scope="row"><?= $n++;?></th>
            <td class="w-25">{{$item['judul']}}</td>
            <td class="text-truncate" style="max-width: 150px;">{{$item['subject']}}</td>
            <td class="w-25 row-cols-2">
                <a class="btn btn-info" href="/artikel/edit/{{$item['id']}}">Edit</a>
                <a class="btn btn-danger" href="/artikel/delete/{{$item['id']}}">Hapus</a>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>


<div class="container mt-5 d-flex justify-content-center">

    {{ $artikels->links('vendor.pagination.pagination') }}

</div>
@endsection