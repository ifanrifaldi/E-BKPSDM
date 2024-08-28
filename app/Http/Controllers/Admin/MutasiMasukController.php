<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MutasiMasuk;

class MutasiMasukController extends Controller
{
    public function getMutasiMasukCount()
    {
        $count = MutasiMasuk::where('status', 'diproses')->count();
        return $count;
    }
    public function index()
    {
        session()->put('mutasimasuk_badge', false);
        $data['list_mutasimasuk'] = MutasiMasuk::all();

        return view('backend.mutasimasuk.index', $data);
    }

   
    public function create()
    {
        $data['admin'] = $admin = auth()->guard('admin')->user();
        return view('backend.mutasimasuk.create',$data);
    }

   
    public function store(Request $request)
    {
        $mutasimasuk = New MutasiMasuk();

        // $mutasimasuk->id_pegawai = '12';
        $mutasimasuk->id_pegawai = request('id_pegawai');
        $mutasimasuk->nama = request('nama');
        $mutasimasuk->nip = request('nip');
        $mutasimasuk->no_hp = request('no_hp');
        $mutasimasuk->alamat = request('alamat');
        $mutasimasuk->asal = request('asal');
        $mutasimasuk->tujuan = request('tujuan');
        $mutasimasuk->status = 'Diproses';
        $mutasimasuk->pesan = 'Belum Di Verifikasi';
        
        $mutasimasuk->handleUploadFiles();
        $mutasimasuk->save();

        return redirect('admin/mutasimasuk')->with('success', 'Data Berhasil di Simpan');
    }

   
    public function show($mutasimasuk)
    {
        $data['mutasimasuk'] = MutasiMasuk::find($mutasimasuk);

        return view('backend.mutasimasuk.show', $data);
    }

   
    public function edit($mutasimasuk)
    {
        $data['mutasimasuk'] = MutasiMasuk::find($mutasimasuk);

        return view('backend.mutasimasuk.edit', $data);
    }

   
    public function update(MutasiMasuk $mutasimasuk)
    {
        $mutasimasuk->id_pegawai = request('id_pegawai');
        $mutasimasuk->nama = request('nama');
        $mutasimasuk->nip = request('nip');
        $mutasimasuk->no_hp = request('no_hp');
        $mutasimasuk->alamat = request('alamat');
        $mutasimasuk->asal = request('asal');
        $mutasimasuk->tujuan = request('tujuan');
        $mutasimasuk->status = request('status');
        $mutasimasuk->pesan = request('pesan');
        
        $mutasimasuk->handleUploadFiles();
        $mutasimasuk->save();

        return redirect('admin/mutasimasuk')->with('warning', 'Data Berhasil Di Edit');
    }

   
    public function destroy($mutasimasuk)
    {
        MutasiMasuk::destroy($mutasimasuk);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
