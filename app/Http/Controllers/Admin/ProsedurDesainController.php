<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProsedurDesain;

class ProsedurDesainController extends Controller
{
    public function index()
    {
        $data['list_prosedur_desain'] = ProsedurDesain::all();

        return view('backend.prosedur.desain.index', $data);
    }

    
    public function store(Request $request)
    {
        $prosedur_desain = New ProsedurDesain();
        $prosedur_desain->nama = request('nama');
        $prosedur_desain->save();

        return back()->with('success', 'Data Berhasil di Simpan');
    }

    
    public function update($prosedur_desain)
    {
        $prosedur_desain = ProsedurDesain::find($prosedur_desain);
        $prosedur_desain->nama = request('nama');
        $prosedur_desain->save();

        return back()->with('success', 'Data Berhasil di Simpan');
    }

    
    public function destroy($prosedur_desain)
    {
        ProsedurDesain::destroy($prosedur_desain);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
