<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pegawai;

class RegisterController extends Controller
{
    public function index()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('frontend.register.index', $data);
    }

    
    public function store()
    {
        $pegawai = New Pegawai;
        $pegawai->nama = request('nama');
        $pegawai->nip = request('nip');
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->no_hp = request('no_hp');
        $pegawai->email = request('email');
        $pegawai->password = request('password');
        $pegawai->handleUploadFoto();

        $pegawai->save();

        return redirect('login')->with('success', 'Data Berhasil di Simpan Silahkan Login');
    }

    
    
    
    public function update(Pegawai $pegawai)
    {
        $pegawai->nama = request('nama');
        $pegawai->nip = request('nip');
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->no_hp = request('no_hp');
        $pegawai->email = request('email');
        if(request('password')) $pegawai->password = request('password');
        $pegawai->handleUploadFoto();

        $pegawai->save();

        return back()->with('success', 'Data Berhasil Di simpan');
    }

    
    public function destroy($pegawai)
    {
        Pegawai::destroy($pegawai);

        return back()->with('danger', 'Data Berhasil Di hapus');
    }
}
