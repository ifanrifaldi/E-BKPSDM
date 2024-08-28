<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MutasiKeluar;

class MutasiKeluarController extends Controller
{

    public function index()
    {
        $pegawaiId = auth()->guard('pegawai')->user()->id;

        // Mengambil data mutasi instansi berdasarkan ID pegawai yang sedang login
        $data['list_mutasikeluar'] = MutasiKeluar::where('id_pegawai', $pegawaiId)->get();

        return view('pegawai.mutasikeluar.index', $data);
    }


    public function create()
    {
        $data['pegawai'] = $pegawai = auth()->guard('pegawai')->user();
        return view('pegawai.mutasikeluar.create', $data);
    }


    public function store(Request $request)
    {
        $mutasikeluar = new MutasiKeluar();

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

        return redirect('pegawai/mutasikeluar')->with('success', 'Data Berhasil di Simpan');
    }


    public function show($mutasikeluar)
    {
        $data['mutasikeluar'] = MutasiKeluar::find($mutasikeluar);

        return view('pegawai.mutasikeluar.show', $data);
    }


    public function edit($mutasikeluar)
    {
        $data['pegawai'] = $pegawai = auth()->guard('pegawai')->user(); 
        $data['mutasikeluar'] = MutasiKeluar::find($mutasikeluar);

        return view('pegawai.mutasikeluar.edit', $data);
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
        $mutasikeluar->status = 'Diproses';
        $mutasikeluar->pesan = 'Belum Di Verifikasi';

        $mutasikeluar->handleUploadFiles();
        $mutasikeluar->save();

        return redirect('pegawai/mutasikeluar')->with('warning', 'Data Berhasil Di Edit');
    }


    public function destroy($mutasikeluar)
    {
        MutasiKeluar::destroy($mutasikeluar);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
