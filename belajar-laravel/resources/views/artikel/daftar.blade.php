@extends("layout.app")


@section('conten')
<h1>Daftar Artikel</h1>
<a href="/artikel/create" class="btn btn-primary mb-3">Buat Artikel</a>
<table class="table">
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
        <tr>
            <th scope="row"><?= $n++;?></th>
            <td></td>
            <td class="text-truncate"></td>
            <td class="col-2 row-cols-2">
                <button class="btn btn-info">Edit</button>
                <button class="btn btn-danger">Hapus</button>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>

<div class="container mt-5 d-flex justify-content-center">

    {{ $artikels->links('vendor.pagination.pagination') }}

</div>
@endsection