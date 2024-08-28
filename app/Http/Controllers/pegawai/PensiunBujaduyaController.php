<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PensiunBujaduya;

class PensiunBujaduyaController extends Controller
{

    public function index()
    {
        $pegawaiId = auth()->guard('pegawai')->user()->id;
        $data['list_pensiunbujaduya'] = PensiunBujaduya::where('id_pegawai', $pegawaiId)->get();

        return view('pegawai.pensiunbujaduya.index', $data);
    }


    public function create()
    {
        $data['pegawai'] = $pegawai = auth()->guard('pegawai')->user();
        return view('pegawai.pensiunbujaduya.create', $data);
    }


    public function store(Request $request)
    {
        $pensiunbujaduya = new PensiunBujaduya();

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

        return redirect('pegawai/pensiunbujaduya')->with('success', 'Data Berhasil di Simpan');
    }


    public function show($pensiunbujaduya)
    {
        $data['pensiunbujaduya'] = PensiunBujaduya::find($pensiunbujaduya);

        return view('pegawai.pensiunbujaduya.show', $data);
    }


    public function edit($pensiunbujaduya)
    {
        $data['pegawai'] = $pegawai = auth()->guard('pegawai')->user();
        $data['pensiunbujaduya'] = PensiunBujaduya::find($pensiunbujaduya);

        return view('pegawai.pensiunbujaduya.edit', $data);
    }


    public function update(PensiunBujaduya $pensiunbujaduya)
    {
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

        return redirect('pegawai/pensiunbujaduya')->with('warning', 'Data Berhasil Di Edit');
    }


    public function destroy($pensiunbujaduya)
    {
        PensiunBujaduya::destroy($pensiunbujaduya);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
