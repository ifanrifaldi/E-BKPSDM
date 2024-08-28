<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('backend.pegawai.index', $data);
    }

    
    public function store()
    {
        $pegawai = New Pegawai;
        $pegawai->nama = request('nama');
        $pegawai->nip = request('nip');
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->tanggal_lahir = request('tanggal_lahir');
        $pegawai->tempat_lahir = request('tempat_lahir');
        $pegawai->agama = request('agama');
        $pegawai->alamat = request('alamat');
        $pegawai->pendidikan_terakhir = request('pendidikan_terakhir');
        $pegawai->tahun_lulus = request('tahun_lulus');
        $pegawai->unit_kerja = request('unit_kerja');
        $pegawai->jabatan = request('jabatan');
        $pegawai->eselon = request('eselon');
        $pegawai->golongan = request('golongan');
        $pegawai->masa_kerja = request('masa_kerja');
        $pegawai->no_hp = request('no_hp');
        $pegawai->email = request('email');
        $pegawai->password = request('password');
        $pegawai->handleUploadFoto();

        $pegawai->save();

        return back()->with('success', 'Data Berhasil Di simpan');
    }

    
    
    
    public function update(Pegawai $pegawai)
    {
        $pegawai->nama = request('nama');
        $pegawai->nip = request('nip');
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->tanggal_lahir = request('tanggal_lahir');
        $pegawai->tempat_lahir = request('tempat_lahir');
        $pegawai->agama = request('agama');
        $pegawai->alamat = request('alamat');
        $pegawai->pendidikan_terakhir = request('pendidikan_terakhir');
        $pegawai->tahun_lulus = request('tahun_lulus');
        $pegawai->unit_kerja = request('unit_kerja');
        $pegawai->jabatan = request('jabatan');
        $pegawai->eselon = request('eselon');
        $pegawai->golongan = request('golongan');
        $pegawai->masa_kerja = request('masa_kerja');
        $pegawai->no_hp = request('no_hp');
        $pegawai->email = request('email');
        if(request('password')) $pegawai->password = request('password');
        $pegawai->handleUploadFoto();

        $pegawai->save();

        return back()->with('warning', 'Data Berhasil Di Edit');
    }

    
    public function destroy($pegawai)
    {
        Pegawai::destroy($pegawai);

        return back()->with('danger', 'Data Berhasil Di hapus');
    }
}
