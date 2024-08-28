<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mitra;
use PhpParser\Node\Expr\New_;

class MitraController extends Controller
{
    
    public function index()
    {  
        $data['list_mitra'] = Mitra::all();
        return view('backend.mitra.index', $data);
        
    }

    
    public function create()
    {
        return view('backend.mitra.create');
    }

    
    public function store(Request $request)
    {
        $mitra = New Mitra();
        $mitra->nama = request('nama');
        $mitra->kota_mitra = request('kota_mitra');
        $mitra->handleUploadFoto();
        $mitra->save();

        return redirect('admin/mitra')->with('success', 'Data Berhasil di Simpan');
    }

    
    public function show(string $id)
    {
        
    }

    
    public function edit($mitra)
    {
        $data['mitra'] = Mitra::find($mitra);

        return view('backend.mitra.edit', $data);
    }

    
    public function update($mitra)
    {
        $mitra = Mitra::find($mitra);
        $mitra->nama = request('nama');
        $mitra->kota_mitra = request('kota_mitra');
        $mitra->handleUploadFoto();
        $mitra->save();

        return redirect('admin/mitra')->with('warning', 'Data Berhasil Di Edit');
    }

    
    public function destroy($mitra)
    {
        Mitra::destroy($mitra);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
