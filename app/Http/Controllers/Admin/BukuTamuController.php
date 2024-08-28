<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BukuTamu;

class BukuTamuController extends Controller
{
   
    public function index()
    {
        $data['list_bukutamu'] = BukuTamu::all();

        return view('backend.bukutamu.index', $data);
    }

   
    public function create()
    {
        return view('backend.bukutamu.create');
    }

   
    public function store(Request $request)
    {
        $bukutamu = New BukuTamu();
        $bukutamu->nama = request('nama');
        $bukutamu->asal = request('asal');
        $bukutamu->keperluan = request('keperluan');
        $bukutamu->foto = $bukutamu->handleUploadFoto($request->foto);
        // $bukutamu->handleUploadFoto();
        $bukutamu->save();

        return redirect('admin/bukutamu')->with('success', 'Data Berhasil di Simpan');
    }

   
    public function show($bukutamu)
    {
        $data['profil'] = BukuTamu::find($bukutamu);

        return view('backend.profil.show', $data);
    }

   
    public function edit($bukutamu)
    {
        $data['profil'] = BukuTamu::find($bukutamu);

        return view('backend.profil.edit', $data);
    }

   
    public function update(BukuTamu $bukutamu)
    {
        $bukutamu->nama = request('nama');
        $bukutamu->asal = request('asal');
        $bukutamu->keperluan = request('keperluan');
        $bukutamu->handleUploadFoto();
        $bukutamu->save();

        return redirect('admin/bukutamu')->with('warning', 'Data Berhasil di Simpan');
    }

   
    public function destroy($bukutamu)
    {
        BukuTamu::destroy($bukutamu);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
