<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>

     .mx-auto {width:800px}
     .card { margin-top:10px;}

   </style>

</head>
<body>
<div class="mx-auto">
<h3>Tambah Data Buku</h3>

<a href="/buku">kembali</a>

<br/>
<br/>

<form action="/buku/store" method="post">
    {{csrf_field()}}


<div class="card">
<div class="card-header">
    Tambah Data
</div>
  <div class="card-body">
  
  <div class="form-group">
    <label for="code">Kode : </label> <input type="text" class="form-control" id="kode" name="kode">  
  </div>

  <div class="form-group">
    <label for="title">Judul : </label> <input type="text" class="form-control" id="judul" name="judul">  
  </div>

  <div class="form-group">
    <label for="author">Penulis : </label> <input type="text" class="form-control" id="penulis" name="penulis">  
  </div>
  
  <div class="form-group">
    <label for="stock">Stok : </label> <input type="text" class="form-control" id="stok" name="stok">  
  </div>

  <input type="submit" value="SIMPAN">
</div>
</div>


</form>
</div>
    
</body>
</html>