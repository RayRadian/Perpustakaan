<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class BukuController extends Controller
{
    
    public function index()
    {
        $buku = \DB::table('book')->paginate(5);
        return view('index',['buku' => $buku]);
    }

    public function tambah()
    {

    return view('insertBook');

    }

    public function store(Request $request)
    {
 
        DB::table('book')->insert([
        'code' => $request->kode,
        'title' => $request->judul,
        'author' => $request->penulis,
        'stock' => $request->stok
        ]);

        return redirect('/buku');
    }


public function edit($id)
{

$buku = DB::table('book')->where('code', $id) ->get();
return view('editBook',['buku' => $buku]);

return redirect('/buku');
}


public function update(Request $request)
{

DB::table('book')->where('code',$request->code)->update([
'code'=> $request->code,
'title' => $request->title,
'author' => $request->author,
'stock' => $request->stock
]);

return redirect('/buku');
}

public function hapus($id)
{

DB::table('book')->where('code',$id)->delete();
return redirect('/buku');

}



public function cari (Request $request)
{
$cari = $request->cari;

$buku = DB::table('book')
->where('title', 'like',"%".$cari."%")
->paginate();

return view('index',['buku' => $buku]);
}









}
