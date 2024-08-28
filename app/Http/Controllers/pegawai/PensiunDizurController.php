<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PensiunDizur;

class PensiunDizurController extends Controller
{
   
    public function index()
    {
        $pegawaiId = auth()->guard('pegawai')->user()->id;
        $data['list_pensiundizur'] = PensiunDizur::where('id_pegawai', $pegawaiId)->get();
        // dd($pegawaiId);
        // dd($data['list_pensiundizur']);

        return view('pegawai.pensiundizur.index', $data);
    }

   
    public function create()
    {
        $data['pegawai'] = $pegawai = auth()->guard('pegawai')->user();
        return view('pegawai.pensiundizur.create',$data);
    }

   
    public function store(Request $request)
    {
        $pensiundizur = New PensiunDizur();

        // $pensiundizur->id_pegawai = '12';
        $pensiundizur->id_pegawai = request('id_pegawai');
        $pensiundizur->nama = request('nama');
        $pensiundizur->nip = request('nip');
        $pensiundizur->no_hp = request('no_hp');
        $pensiundizur->alamat = request('alamat');
        $pensiundizur->keterangan = request('keterangan');
        $pensiundizur->status = 'Diproses';
        $pensiundizur->pesan = 'Belum Di Verifikasi';
        
        $pensiundizur->handleUploadFiles();
        $pensiundizur->save();

        return redirect('pegawai/pensiundizur')->with('success', 'Data Berhasil di Simpan');
    }

   
    public function show($pensiundizur)
    {
        $data['pensiundizur'] = PensiunDizur::find($pensiundizur);

        return view('pegawai.pensiundizur.show', $data);
    }

   
    public function edit($pensiundizur)
    {
        $data['pegawai'] = $pegawai = auth()->guard('pegawai')->user(); 
        $data['pensiundizur'] = PensiunDizur::find($pensiundizur);

        return view('pegawai.pensiundizur.edit', $data);
    }

   
    public function update(PensiunDizur $pensiundizur)
    {
        $pensiundizur->id_pegawai = request('id_pegawai');
        $pensiundizur->nama = request('nama');
        $pensiundizur->nip = request('nip');
        $pensiundizur->no_hp = request('no_hp');
        $pensiundizur->alamat = request('alamat');
        $pensiundizur->keterangan = request('keterangan');
        $pensiundizur->status = 'Diproses';
        $pensiundizur->pesan = 'Belum Di Verifikasi';
        
        $pensiundizur->handleUploadFiles();
        $pensiundizur->save();

        return redirect('pegawai/pensiundizur')->with('warning', 'Data Berhasil Di Edit');
    }

   
    public function destroy($pensiundizur)
    {
        PensiunDizur::destroy($pensiundizur);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
