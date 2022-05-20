<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota Perpustakaan</title>
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

<h3>Data Member</h3>

<a href="/buku"> + Lihat Data Buku </a>

<br/>
<br/>

<p>Cari Data Member : </p>
<form action="/member/cari" method="GET">
    <input type="text" name="cari" placeholder="Nama Member .." value="{{ old('cari')}}">
    <input type="submit" value="Cari">
</form>

<br/>


<table border="1">
    <tr>
    <th>Kode</th>
    <th>Nama</th>
    <th>Buku</th>
    <th>Aksi</th>
    </tr>
@foreach ($member as $p)
<tr>

<td>{{ $p->code }}</td>
<td>{{ $p->name }}</td>
<td>{{ $p->book }}</td>
<td>
    <a href="/member/edit/{{ $p->code }}">Edit</a> |
    <a href="/member/delete/{{ $p->code }}">Delete</a>
</td>
</tr>
@endforeach


</table>

<br/>

Halaman : {{$member->currentPage()}} <br/>
Jumlah Data : {{$member->total()}} <br/>
Data Per Halaman : {{$member->perPage()}} <br/>

{{$member->links()}}


</body>
</html>


