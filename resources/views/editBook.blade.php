<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>

.mx-auto {width:800px}
.card { margin-top:10px;}
  
</style>

</head>
<body>
<div class="mx-auto">

<h3> Edit Buku </h3>
<a href="/buku">Kembali</a>

<br/>
<br/>

@foreach ($buku as $p)
<form action="/buku/update" method="post">
    {{csrf_field()}}
    
    <div class="form-group">
    <label for="code">Kode</label>
    <input type="text" class="form-control" id="kode" value="{{$p->code}}">
    </div>
  
    <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control" id="judul" value="{{$p->title}}">
    </div>

    <div class="form-group">
    <label for="penulis">Penulis</label>
    <input type="text" class="form-control" id="penulis" value="{{$p->author}}">
    </div>

    <div class="form-group">
    <label for="stok">Stok</label>
    <input type="text" class="form-control" id="stok" value="{{$p->stock}}">
    </div>



    
    <input type="submit" value="Simpan Data">
</form>
@endforeach


</div>
    
</body>
</html>