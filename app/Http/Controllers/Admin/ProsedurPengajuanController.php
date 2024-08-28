<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProsedurPengajuan;

class ProsedurPengajuanController extends Controller
{
   
    public function index()
    {
        $data['list_prosedurpengajuan'] = ProsedurPengajuan::all();

        return view('backend.prosedurpengajuan.index', $data);
    }

   
    public function create()
    {
        $data['admin'] = $admin = auth()->guard('admin')->user();
        return view('backend.prosedurpengajuan.create',$data);
    }

   
    public function store(Request $request)
    {
        $prosedurpengajuan = New ProsedurPengajuan();
        $prosedurpengajuan->handleUploadFiles();
        $prosedurpengajuan->save();

        return redirect('admin/prosedurpengajuan')->with('success', 'Data Berhasil di Simpan');
    }

   
    public function show($prosedurpengajuan)
    {
        $data['prosedurpengajuan'] = ProsedurPengajuan::find($prosedurpengajuan);

        return view('backend.prosedurpengajuan.show', $data);
    }

   
    public function edit($prosedurpengajuan)
    {
        $data['prosedurpengajuan'] = ProsedurPengajuan::find($prosedurpengajuan);

        return view('backend.prosedurpengajuan.edit', $data);
    }

   
    public function update(ProsedurPengajuan $prosedurpengajuan)
    {
        $prosedurpengajuan->handleUploadFiles();
        $prosedurpengajuan->save();

        return redirect('admin/prosedurpengajuan')->with('warning', 'Data Berhasil Di Edit');
    }

   
    public function destroy($prosedurpengajuan)
    {
        ProsedurPengajuan::destroy($prosedurpengajuan);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
