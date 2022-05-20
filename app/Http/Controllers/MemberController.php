<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MemberController extends Controller
{
    

    public function index()
    {
        $member = \DB::table('member')->paginate(5);
        return view('member',['member' => $member]);
    }

    public function tambah()
    {

    return view('insertMember');

    }

    public function store(Request $request)
    {
 
        DB::table('member')->insert([
        'code' => $request->kode,
        'name' => $request->nama,
        'book' => $request->buku,
        ]);

        return redirect('/member');
    }


public function edit($id)
{

$member = DB::table('member')->where('code', $id) ->get();
return view('editMember',['member' => $member]);

return redirect('/member');
}


public function update(Request $request)
{

DB::table('member')->where('code',$request->code)->update([
'code'=> $request->code,
'name' => $request->nama,
'book' => $request->buku,
]);

return redirect('/member');
}

public function hapus($id)
{

DB::table('member')->where('code',$id)->delete();
return redirect('/member');

}



public function cari (Request $request)
{
$cari = $request->cari;

$member = DB::table('member')
->where('Name', 'like',"%".$cari."%")
->paginate();

return view('member',['member' => $member]);
}


}
