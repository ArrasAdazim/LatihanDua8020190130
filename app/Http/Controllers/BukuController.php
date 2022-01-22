<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $data_buku= \App\Buku::all();
        return view('buku.index',['data_buku'=>$data_buku]);;
    }

    public function create(Request $request)
    {
        \App\Buku::create($request->all());
        return redirect('/buku')->with('sukses','Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $buku= \App\Buku::find($id);
        return view('buku/edit',['buku'=>$buku]);
    }

    public function update (Request $request, $id)
    {
        $buku= \App\Buku::find($id);
        $buku->update($request->all());
        return redirect('/buku')->with('sukses','Data berhasil diupdate');
    }

    public function delete ($id)
    {
        $buku = \App\Buku::find($id);
        $buku->delete($buku);
        return redirect('/buku')->with('sukses','Data berhasil dihapus');
    }
}
