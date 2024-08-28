<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
   
    public function index()
    {
        $data['list_profil'] = Profil::all();

        return view('backend.profil.index', $data);
    }

   
    public function create()
    {
        return view('backend.profil.create');
    }

   
    public function store(Request $request)
    {
        $profil = New Profil();
        $profil->handleUploadFiles();
        $profil->save();

        return redirect('admin/profil')->with('success', 'Data Berhasil di Simpan');
    }

   
    public function show($profil)
    {
        $data['profil'] = Profil::find($profil);

        return view('backend.profil.show', $data);
    }

   
    public function edit($profil)
    {
        $data['profil'] = Profil::find($profil);

        return view('backend.profil.edit', $data);
    }

   
    public function update(Profil $profil)
    {
        $profil->handleUploadFiles();
        $profil->save();

        return redirect('admin/profil')->with('warning', 'Data Berhasil Di Edit');
    }

   
    public function destroy($profil)
    {
        Profil::destroy($profil);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
