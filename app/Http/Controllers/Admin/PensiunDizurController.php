<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PensiunDizur;

class PensiunDizurController extends Controller
{
    public function getPensiunDizurCount()
    {
        $count = PensiunDizur::where('status', 'Diproses')->count();
        return $count;
    }

    public function index()
    {
        session()->put('pensiundizur_badge', false);
        $data['list_pensiundizur'] = PensiunDizur::all();

        return view('backend.pensiundizur.index', $data);
    }

   
    public function create()
    {
        $data['admin'] = $admin = auth()->guard('admin')->user();
        return view('backend.pensiundizur.create',$data);
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

        return redirect('admin/pensiundizur')->with('success', 'Data Berhasil di Simpan');
    }

   
    public function show($pensiundizur)
    {
        $data['pensiundizur'] = PensiunDizur::find($pensiundizur);

        return view('backend.pensiundizur.show', $data);
    }

   
    public function edit($pensiundizur)
    {
        $data['pensiundizur'] = PensiunDizur::find($pensiundizur);

        return view('backend.pensiundizur.edit', $data);
    }

   
    public function update(PensiunDizur $pensiundizur)
    {
        $pensiundizur->id_pegawai = request('id_pegawai');
        $pensiundizur->nama = request('nama');
        $pensiundizur->nip = request('nip');
        $pensiundizur->no_hp = request('no_hp');
        $pensiundizur->alamat = request('alamat');
        $pensiundizur->keterangan = request('keterangan');
        $pensiundizur->status = request('status');
        $pensiundizur->pesan = request('pesan');
        
        $pensiundizur->handleUploadFiles();
        $pensiundizur->save();

        return redirect('admin/pensiundizur')->with('warning', 'Data Berhasil Di Edit');
    }

   
    public function destroy($pensiundizur)
    {
        PensiunDizur::destroy($pensiundizur);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
