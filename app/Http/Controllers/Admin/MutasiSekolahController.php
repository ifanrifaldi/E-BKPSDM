<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MutasiSekolah;

class MutasiSekolahController extends Controller
{
    public function getMutasiSekolahCount()
    {
        $count = MutasiSekolah::where('status', 'diproses')->count();
        return $count;
    }

    public function index()
    {
        session()->put('mutasisekolah_badge', false);
        $data['list_mutasisekolah'] = MutasiSekolah::all();

        return view('backend.mutasisekolah.index', $data);
    }

   
    public function create()
    {
        $data['admin'] = $admin = auth()->guard('admin')->user();
        return view('backend.mutasisekolah.create',$data);
    }

   
    public function store(Request $request)
    {
        $mutasisekolah = New MutasiSekolah();

        // $mutasisekolah->id_pegawai = '12';
        $mutasisekolah->id_pegawai = request('id_pegawai');
        $mutasisekolah->nama = request('nama');
        $mutasisekolah->nip = request('nip');
        $mutasisekolah->no_hp = request('no_hp');
        $mutasisekolah->alamat = request('alamat');
        $mutasisekolah->asal = request('asal');
        $mutasisekolah->tujuan = request('tujuan');
        $mutasisekolah->status = 'Diproses';
        $mutasisekolah->pesan = 'Belum Di Verifikasi';
        
        $mutasisekolah->handleUploadFiles();
        $mutasisekolah->save();

        return redirect('admin/mutasisekolah')->with('success', 'Data Berhasil di Simpan');
    }

   
    public function show($mutasisekolah)
    {
        $data['mutasisekolah'] = MutasiSekolah::find($mutasisekolah);

        return view('backend.mutasisekolah.show', $data);
    }

   
    public function edit($mutasisekolah)
    {
        $data['mutasisekolah'] = MutasiSekolah::find($mutasisekolah);

        return view('backend.mutasisekolah.edit', $data);
    }

   
    public function update(MutasiSekolah $mutasisekolah)
    {
        $mutasisekolah->id_pegawai = request('id_pegawai');
        $mutasisekolah->nama = request('nama');
        $mutasisekolah->nip = request('nip');
        $mutasisekolah->no_hp = request('no_hp');
        $mutasisekolah->alamat = request('alamat');
        $mutasisekolah->asal = request('asal');
        $mutasisekolah->tujuan = request('tujuan');
        $mutasisekolah->status = request('status');
        $mutasisekolah->pesan = request('pesan');
        
        $mutasisekolah->handleUploadFiles();
        $mutasisekolah->save();

        return redirect('admin/mutasisekolah')->with('warning', 'Data Berhasil Di Edit');
    }

   
    public function destroy($mutasisekolah)
    {
        MutasiSekolah::destroy($mutasisekolah);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
