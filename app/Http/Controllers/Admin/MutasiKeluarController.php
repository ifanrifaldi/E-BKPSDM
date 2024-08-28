<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MutasiKeluar;

class MutasiKeluarController extends Controller
{
    public function getMutasiKeluarCount()
    {
        $count = Mutasikeluar::where('status', 'diproses')->count();
        return $count;
    }
   
    public function index()
    {
        session()->put('mutasikeluar_badge', false);
        $data['list_mutasikeluar'] = MutasiKeluar::all();

        return view('backend.mutasikeluar.index', $data);
    }

   
    public function create()
    {
        $data['admin'] = $admin = auth()->guard('admin')->user();
        return view('backend.mutasikeluar.create',$data);
    }

   
    public function store(Request $request)
    {
        $mutasikeluar = New MutasiKeluar();

        // $mutasikeluar->id_pegawai = '12';
        $mutasikeluar->id_pegawai = request('id_pegawai');
        $mutasikeluar->nama = request('nama');
        $mutasikeluar->nip = request('nip');
        $mutasikeluar->no_hp = request('no_hp');
        $mutasikeluar->alamat = request('alamat');
        $mutasikeluar->asal = request('asal');
        $mutasikeluar->tujuan = request('tujuan');
        $mutasikeluar->status = 'Diproses';
        $mutasikeluar->pesan = 'Belum Di Verifikasi';
        
        $mutasikeluar->handleUploadFiles();
        $mutasikeluar->save();

        return redirect('admin/mutasikeluar')->with('success', 'Data Berhasil di Simpan');
    }

   
    public function show($mutasikeluar)
    {
        $data['mutasikeluar'] = MutasiKeluar::find($mutasikeluar);

        return view('backend.mutasikeluar.show', $data);
    }

   
    public function edit($mutasikeluar)
    {
        $data['mutasikeluar'] = MutasiKeluar::find($mutasikeluar);

        return view('backend.mutasikeluar.edit', $data);
    }

   
    public function update(MutasiKeluar $mutasikeluar)
    {
        $mutasikeluar->id_pegawai = request('id_pegawai');
        $mutasikeluar->nama = request('nama');
        $mutasikeluar->nip = request('nip');
        $mutasikeluar->no_hp = request('no_hp');
        $mutasikeluar->alamat = request('alamat');
        $mutasikeluar->asal = request('asal');
        $mutasikeluar->tujuan = request('tujuan');
        $mutasikeluar->status = request('status');
        $mutasikeluar->pesan = request('pesan');
        
        $mutasikeluar->handleUploadFiles();
        $mutasikeluar->save();

        return redirect('admin/mutasikeluar')->with('warning', 'Data Berhasil Di Edit');
    }

   
    public function destroy($mutasikeluar)
    {
        MutasiKeluar::destroy($mutasikeluar);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
