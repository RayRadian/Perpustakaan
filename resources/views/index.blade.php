<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku Perpustakaan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<style type="text/css">
    .pagination li{
        float : left;
        list-style-type : none;
        margin :5px;
    }
</style>

<h3>Data Buku</h3>

<a href="/buku/tambah"> + Tambah Buku Baru </a><br/>
<a href="/member/tambah"> + Tambah Member Baru </a>
<br/>
<br/>

<p>Cari Data Buku : </p>
<form action="/buku/cari" method="GET">
    <input type="text" name="cari" placeholder="Judul Buku .." value="{{ old('cari')}}">
    <input type="submit" value="Cari">
</form>

<br/>


<table border="1">
    <tr>
    <th>Kode</th>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Stok</th>
    <th>Aksi</th>
    </tr>
@foreach ($buku as $p)
<tr>

<td>{{ $p->code }}</td>
<td>{{ $p->title }}</td>
<td>{{ $p->author }}</td>
<td>{{ $p->stock }}</td>
<td>
    <a href="/buku/edit/{{ $p->code }}">Edit</a> |
    <a href="/buku/delete/{{ $p->code }}">Delete</a>
</td>
</tr>
@endforeach


</table>

<br/>

Halaman : {{$buku->currentPage()}} <br/>
Jumlah Data : {{$buku->total()}} <br/>
Data Per Halaman : {{$buku->perPage()}} <br/>

{{$buku->links()}}


</body>
</html>


