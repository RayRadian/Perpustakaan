<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>

    .mx-auto {width:800px}
    .card { margin-top:10px;}

    </style>
  </head>
<body>
<div class="mx-auto">
<h3> Edit Member </h3>
<a href="/member">Kembali</a>

<br/>
<br/>


@foreach ($member as $p)
<form action="/member/update" method="post">
    {{csrf_field()}}
    
    <div class="form-group">
    <label for="kode">Kode</label>
    <input type="text" class="form-control" id="kode" value="{{$p->code}}">
    </div>

    <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" value="{{$p->name}}">
    </div>


    <div class="form-group">
    <label for="buku">Buku</label>
    <input type="text" class="form-control" id="buku" value="{{$p->book}}">
    </div>
    
    <input type="submit" value="Simpan Data">
</form>
@endforeach

</div>
    
</body>
</html>