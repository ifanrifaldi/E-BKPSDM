<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MutasiSekolah;

class MutasiSekolahController extends Controller
{
   
    public function index()
    {
        $pegawaiId = auth()->guard('pegawai')->user()->id;

        $data['list_mutasisekolah'] = MutasiSekolah::where('id_pegawai', $pegawaiId)->get();

        return view('pegawai.mutasisekolah.index', $data);
    }

   
    public function create()
    {
        $data['pegawai'] = $pegawai = auth()->guard('pegawai')->user();
        return view('pegawai.mutasisekolah.create',$data);
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

        return redirect('pegawai/mutasisekolah')->with('success', 'Data Berhasil di Simpan');
    }

   
    public function show($mutasisekolah)
    {
        $data['mutasisekolah'] = MutasiSekolah::find($mutasisekolah);

        return view('pegawai.mutasisekolah.show', $data);
    }

   
    public function edit($mutasisekolah)
    {
        $data['pegawai'] = $pegawai = auth()->guard('pegawai')->user(); 
        $data['mutasisekolah'] = MutasiSekolah::find($mutasisekolah);

        return view('pegawai.mutasisekolah.edit', $data);
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
        $mutasisekolah->status = 'Diproses';
        $mutasisekolah->pesan = 'Belum Di Verifikasi';
        
        $mutasisekolah->handleUploadFiles();
        $mutasisekolah->save();

        return redirect('pegawai/mutasisekolah')->with('warning', 'Data Berhasil Di Edit');
    }

   
    public function destroy($mutasisekolah)
    {
        MutasiSekolah::destroy($mutasisekolah);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
