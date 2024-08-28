<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\MutasiInstansi;
use App\Models\MutasiSekolah;
use App\Models\MutasiKeluar;
use App\Models\MutasiMasuk;
use App\Models\PensiunDizur;
use App\Models\PensiunBujaduya;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Mengambil jumlah data dari masing-masing tabel
        $instansiCount = MutasiInstansi::count();
        $sekolahCount = MutasiSekolah::count();
        $masukCount = MutasiMasuk::count();
        $keluarCount = MutasiKeluar::count();
        $dizurCount = PensiunDizur::count();
        $bujaduyaCount = PensiunBujaduya::count();

        // Mengirimkan data ke view
        return view('backend.index', compact('instansiCount', 'sekolahCount', 'masukCount', 'keluarCount', 'dizurCount', 'bujaduyaCount'));
    }

    public function index()
    {
        $data['list_admin'] = Admin::all();
        return view('backend.admin.index', $data);
    }


    public function store()
    {
        $admin = new Admin;
        $admin->nama = request('nama');
        $admin->username = request('username');
        $admin->password = request('password');
        $admin->handleUploadFoto();

        $admin->save();

        return back()->with('success', 'Data Berhasil Di simpan');
    }




    public function update(Admin $admin)
    {
        $admin->nama = request('nama');
        $admin->username = request('username');
        if (request('password')) $admin->password = request('password');
        $admin->handleUploadFoto();

        $admin->save();

        return back()->with('warning', 'Data Berhasil Di Edit');
    }


    public function destroy($admin)
    {
        Admin::destroy($admin);

        return back()->with('danger', 'Data Berhasil Di hapus');
    }
}
