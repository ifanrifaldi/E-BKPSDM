<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PensiunBujaduya;

class PensiunBujaduyaController extends Controller
{
    public function getPensiunBujaduyaCount()
    {
        $count = PensiunBujaduya::where('status', 'Diproses')->count();
        return $count;
    }
    public function index()
    {
        session()->put('pensiunbujaduya_badge', false);
        $data['list_pensiunbujaduya'] = PensiunBujaduya::all();

        return view('backend.pensiunbujaduya.index', $data);
    }

   
    public function create()
    {
        $data['admin'] = $admin = auth()->guard('admin')->user();
        return view('backend.pensiunbujaduya.create',$data);
    }

   
    public function store(Request $request)
    {
        $pensiunbujaduya = New PensiunBujaduya();

        // $pensiunbujaduya->id_pegawai = '12';
        $pensiunbujaduya->id_pegawai = request('id_pegawai');
        $pensiunbujaduya->nama = request('nama');
        $pensiunbujaduya->nip = request('nip');
        $pensiunbujaduya->no_hp = request('no_hp');
        $pensiunbujaduya->alamat = request('alamat');
        $pensiunbujaduya->keterangan = request('keterangan');
        $pensiunbujaduya->status = 'Diproses';
        $pensiunbujaduya->pesan = 'Belum Di Verifikasi';
        
        $pensiunbujaduya->handleUploadFiles();
        $pensiunbujaduya->save();

        return redirect('admin/pensiunbujaduya')->with('success', 'Data Berhasil di Simpan');
    }

   
    public function show($pensiunbujaduya)
    {
        $data['pensiunbujaduya'] = PensiunBujaduya::find($pensiunbujaduya);

        return view('backend.pensiunbujaduya.show', $data);
    }

   
    public function edit($pensiunbujaduya)
    {
        $data['pensiunbujaduya'] = PensiunBujaduya::find($pensiunbujaduya);

        return view('backend.pensiunbujaduya.edit', $data);
    }

   
    public function update(PensiunBujaduya $pensiunbujaduya)
    {
        $pensiunbujaduya->id_pegawai = request('id_pegawai');
        $pensiunbujaduya->nama = request('nama');
        $pensiunbujaduya->nip = request('nip');
        $pensiunbujaduya->no_hp = request('no_hp');
        $pensiunbujaduya->alamat = request('alamat');
        $pensiunbujaduya->keterangan = request('keterangan');
        $pensiunbujaduya->status = request('status');
        $pensiunbujaduya->pesan = request('pesan');
        
        $pensiunbujaduya->handleUploadFiles();
        $pensiunbujaduya->save();

        return redirect('admin/pensiunbujaduya')->with('warning', 'Data Berhasil Di Edit');
    }

   
    public function destroy($pensiunbujaduya)
    {
        PensiunBujaduya::destroy($pensiunbujaduya);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
