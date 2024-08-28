<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{

    public function index()
    {
        // Retrieve the logged-in pegawai's ID
        $pegawaiId = auth()->guard('pegawai')->user()->id;

        // Get the list of Pengaduan records that belong to the logged-in pegawai
        $data['list_pengaduan'] = Pengaduan::where('id_pegawai', $pegawaiId)->get();

        // Return the view with the data
        return view('pegawai.pengaduan.index', $data);
    }


    // public function create()
    // {
    //     $data['pegawai'] = $pegawai = auth()->guard('pegawai')->user();
    //     return view('pegawai.pengaduan.create', $data);
    // }


    public function store(Request $request)
    {
        // $data['pegawai'] = $pegawai = auth()->guard('pegawai')->user();
        $pengaduan = new Pengaduan();

        $pengaduan->id_pegawai = request('id_pegawai');
        $pengaduan->nama = request('nama');
        $pengaduan->jenis_pengaduan = request('jenis_pengaduan');
        $pengaduan->keterangan = request('keterangan');
        $pengaduan->nip = request('nip');
        $pengaduan->no_hp = request('no_hp');
        $pengaduan->status = 'Belum Dilihat';

        $pengaduan->handleUploadFiles();
        $pengaduan->save();

        return redirect('pegawai/pengaduan')->with('success', 'Data Berhasil di Simpan');
    }


    public function show($pengaduan)
    {
        $data['pengaduan'] = Pengaduan::find($pengaduan);

        return view('pegawai.pengaduan.show', $data);
    }


    // public function edit($pengaduan)
    // {
    //     $data['pegawai'] = $pegawai = auth()->guard('pegawai')->user(); 
    //     $data['pengaduan'] = Pengaduan::find($pengaduan);

    //     return view('pegawai.pengaduan.edit', $data);
    // }


    public function update(pengaduan $pengaduan)
    {
        // $data['pegawai'] = $pegawai = auth()->guard('pegawai')->user(); 
        $pengaduan->id_pegawai = request('id_pegawai');
        $pengaduan->nama = request('nama');
        $pengaduan->jenis_pengaduan = request('jenis_pengaduan');
        $pengaduan->keterangan = request('keterangan');
        $pengaduan->status = 'Belum Dilihat';
        $pengaduan->no_hp = request('no_hp');
        $pengaduan->pesan = request('pesan');

        $pengaduan->handleUploadFiles();
        $pengaduan->save();

        return redirect('pegawai/pengaduan')->with('warning', 'Data Berhasil Di Edit');
    }


    public function destroy($pengaduan)
    {
        Pengaduan::destroy($pengaduan);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
