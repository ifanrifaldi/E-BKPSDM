<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GaleriProduk;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\JenisProduk;

class ProdukController extends Controller
{
    public function index()
    {
        $data['list_produk'] = Produk::all();
        return view('backend.produk.index', $data);
    }

    public function create()
    {
        $data['list_jenis_produk'] = JenisProduk::all();
        return view('backend.produk.create', $data);
    }

    public function store(Request $request)
    {
        $produk = New Produk;
        $produk->id_jenis_produk = request('id_jenis_produk');
        $produk->nama = request('nama');
        $produk->deskripsi_produk = request('deskripsi_produk');
        $produk->handleUploadFoto();
        $produk->save();

        return redirect('admin/produk')->with('success', 'Data Berhasil di Simpan');
    }

    public function show($produk)
    {
        $data['produk'] = Produk::find($produk);
        $data['list_galeri_produk'] = GaleriProduk::where('id_produk', $produk)->orderBy('created_at', 'DESC')->get();
        return view('backend.produk.show', $data);
    }

    public function edit($produk)
    {
        $data['list_jenis_produk'] = JenisProduk::all();
        $data['produk'] = Produk::find($produk);
        return view('backend.produk.edit', $data);
    }

    public function update(Produk $produk)
    {
        $produk->id_jenis_produk = request('id_jenis_produk');
        $produk->nama = request('nama');
        $produk->deskripsi_produk = request('deskripsi_produk');
        $produk->handleUploadFoto();
        $produk->save();

        return redirect('admin/produk')->with('success', 'Data Berhasil di Simpan');
    }

    public function destroy($produk)
    {
        Produk::destroy($produk);
        return back()->with('danger');
    }

    public function storeGaleri()
    {
        $galeri_produk = New GaleriProduk();
        $galeri_produk->id_produk = request('id_produk');
        $galeri_produk->handleUploadFoto();
        $galeri_produk->save();

        return back()->with('success', 'Data Galeri Produk Berhasil di Tambahkan');
    }

    public function deleteGaleri($galeri_produk)
    {
        GaleriProduk::destroy($galeri_produk);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
