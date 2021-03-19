<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Divisi</th>
            <th>Alamat</th>
            <th>Action</th>
        </thead>
        <?php $n = 1; ?>
        <tbody>
            @foreach ( $santri as $s )
            <tr>
                <td><?= $n++ ?></td>
                <td>{{ $s->nama}}</td>
                <td>{{$s->divisi}}</td>
                <td>{{$s->alamat}}</td>
                {{-- <td></td> --}}
                <td><a href="/santri/delete/{{$s->id}}"><button type="button"> hapus santri</button></a><a href="/santri/edit/{{$s->id}}"><button type="button"> edit santri</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>