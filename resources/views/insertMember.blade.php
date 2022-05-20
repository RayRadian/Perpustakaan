<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Member</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>

     .mx-auto {width:800px}
     .card { margin-top:10px;}

    </style>

</head>
<body>
<div class="mx-auto">

<h3>Tambah Data Member</h3>

<a href="/member">kembali</a>

<br/>
<br/>

<form action="/member/store" method="post">
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
    <label for="name">Nama : </label> <input type="text" class="form-control" id="nama" name="nama">  
  </div>

  <div class="form-group">
    <label for="buku">Buku : </label> <input type="text" class="form-control" id="buku" name="buku">  
  </div>
  
  <input type="submit" value="SIMPAN">
</div>
</div>




</form>
</div>



    
</body>
</html>