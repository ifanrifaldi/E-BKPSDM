<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisProduk;
use Illuminate\Http\Request;

class JenisProdukController extends Controller
{
    public function index()
    {
        $data['list_jenis_produk'] = JenisProduk::all();

        return view('backend.jenis-produk.index', $data);
    }

    public function create()
    {
        //
    }

    public function store()
    {
        $jenis_produk = New JenisProduk;
        $jenis_produk->nama = request('nama');
        $jenis_produk->save();

        return back()->with('success', 'Data Berhasil di Simpan');
    }

   
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(JenisProduk $jenis_produk)
    {
        $jenis_produk->nama = request('nama');
        $jenis_produk->save();

        return back()->with('success', 'Data Berhasil di Simpan');
    }

    
    public function destroy($jenis_produk)
    {
        
        JenisProduk::destroy($jenis_produk);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
