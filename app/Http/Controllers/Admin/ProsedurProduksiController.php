<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProsedurProduksi;

class ProsedurProduksiController extends Controller
{
    public function index()
    {
        $data['list_prosedur_produksi'] = ProsedurProduksi::all();

        return view('backend.prosedur.produksi.index', $data);
    }

    
    public function store(Request $request)
    {
        $prosedur_produksi = New ProsedurProduksi();
        $prosedur_produksi->nama = request('nama');
        $prosedur_produksi->save();

        return back()->with('success', 'Data Berhasil di Simpan');
    }

    
    public function update($prosedur_produksi)
    {
        $prosedur_produksi = ProsedurProduksi::find($prosedur_produksi);
        $prosedur_produksi->nama = request('nama');
        $prosedur_produksi->save();

        return back()->with('success', 'Data Berhasil di Simpan');
    }

    
    public function destroy($prosedur_produksi)
    {
        ProsedurProduksi::destroy($prosedur_produksi);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
