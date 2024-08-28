<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MutasiMasuk;

class MutasiMasukController extends Controller
{

    public function index()
    {
        $pegawaiId = auth()->guard('pegawai')->user()->id;

        // Mengambil data mutasi instansi berdasarkan ID pegawai yang sedang login
        $data['list_mutasimasuk'] = MutasiMasuk::where('id_pegawai', $pegawaiId)->get();

        return view('pegawai.mutasimasuk.index', $data);
    }


    public function create()
    {
        $data['pegawai'] = $pegawai = auth()->guard('pegawai')->user();
        return view('pegawai.mutasimasuk.create', $data);
    }


    public function store(Request $request)
    {
        $mutasimasuk = new MutasiMasuk();

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

        return redirect('pegawai/mutasimasuk')->with('success', 'Data Berhasil di Simpan');
    }


    public function show($mutasimasuk)
    {
        $data['mutasimasuk'] = MutasiMasuk::find($mutasimasuk);

        return view('pegawai.mutasimasuk.show', $data);
    }


    public function edit($mutasimasuk)
    {
        $data['pegawai'] = $pegawai = auth()->guard('pegawai')->user(); 
        $data['mutasimasuk'] = MutasiMasuk::find($mutasimasuk);

        return view('pegawai.mutasimasuk.edit', $data);
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
        $mutasimasuk->status = 'Diproses';
        $mutasimasuk->pesan = 'Belum Di Verifikasi';

        $mutasimasuk->handleUploadFiles();
        $mutasimasuk->save();

        return redirect('pegawai/mutasimasuk')->with('warning', 'Data Berhasil Di Edit');
    }


    public function destroy($mutasimasuk)
    {
        MutasiMasuk::destroy($mutasimasuk);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
