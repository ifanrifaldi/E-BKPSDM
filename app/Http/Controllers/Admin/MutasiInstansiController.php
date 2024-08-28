<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MutasiInstansi;

class MutasiInstansiController extends Controller
{
    public function getMutasiInstansiCount()
    {
        $count = MutasiInstansi::where('status', 'diproses')->count();
        return $count;
    }

    public function index()
    {
        session()->put('mutasiinstansi_badge', false);

        $data['list_mutasiinstansi'] = MutasiInstansi::all();

        return view('backend.mutasiinstansi.index', $data);
    }


    public function create()
    {
        $data['admin'] = $admin = auth()->guard('admin')->user();
        return view('backend.mutasiinstansi.create', $data);
    }


    public function store(Request $request)
    {
        $mutasiinstansi = new MutasiInstansi();

        // $mutasiinstansi->id_pegawai = '12';
        $mutasiinstansi->id_pegawai = request('id_pegawai');
        $mutasiinstansi->nama = request('nama');
        $mutasiinstansi->nip = request('nip');
        $mutasiinstansi->no_hp = request('no_hp');
        $mutasiinstansi->alamat = request('alamat');
        $mutasiinstansi->asal = request('asal');
        $mutasiinstansi->tujuan = request('tujuan');
        $mutasiinstansi->status = 'Diajukan';
        $mutasiinstansi->v1 = '0';
        $mutasiinstansi->v2 = '0';
        $mutasiinstansi->v3 = '0';
        $mutasiinstansi->v4 = '0';
        $mutasiinstansi->v5 = '0';
        $mutasiinstansi->v6 = '0';
        $mutasiinstansi->v7 = '0';
        $mutasiinstansi->v8 = '0';
        $mutasiinstansi->v9 = '0';
        $mutasiinstansi->v10 = '0';
        $mutasiinstansi->pesan = 'Pengajuan Baru';

        $mutasiinstansi->handleUploadFiles();
        $mutasiinstansi->save();

        return redirect('admin/mutasiinstansi')->with('success', 'Data Berhasil di Simpan');
    }


    // app/Http/Controllers/Admin/MutasiInstansiController.php

    public function show($mutasiinstansiId)
    {
        // Ambil data mutasi instansi beserta data pegawai yang terkait
        $mutasiinstansi = MutasiInstansi::with('pegawai')->find($mutasiinstansiId);

        // Periksa apakah data ditemukan
        if (!$mutasiinstansi) {
            abort(404, 'Data mutasi instansi tidak ditemukan.');
        }

        // Kirim data ke view
        return view('backend.mutasiinstansi.show', [
            'mutasiinstansi' => $mutasiinstansi,
            'pegawai' => $mutasiinstansi->pegawai
        ]);
    }







    public function edit($mutasiinstansi)
    {
        $data['mutasiinstansi'] = MutasiInstansi::find($mutasiinstansi);

        return view('backend.mutasiinstansi.edit', $data);
    }


    public function update(MutasiInstansi $mutasiinstansi)
    {
        $mutasiinstansi->id_pegawai = request('id_pegawai');
        $mutasiinstansi->nama = request('nama');
        $mutasiinstansi->nip = request('nip');
        $mutasiinstansi->no_hp = request('no_hp');
        $mutasiinstansi->alamat = request('alamat');
        $mutasiinstansi->asal = request('asal');
        $mutasiinstansi->tujuan = request('tujuan');
        $mutasiinstansi->status = request('status');
        $mutasiinstansi->pesan = request('pesan');

        $mutasiinstansi->handleUploadFiles();
        $mutasiinstansi->save();

        return redirect('admin/mutasiinstansi')->with('warning', 'Data Berhasil Di Edit');
    }

    public function updateColumn(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'column' => 'required|string',
            'value' => 'required|integer',
            'id' => 'required|string',  // Ubah validasi ini menjadi string
        ]);

        $column = $request->input('column');
        $value = $request->input('value');
        $id = $request->input('id');

        // Validasi kolom agar hanya kolom tertentu yang bisa diperbarui
        $validColumns = ['v1', 'v2', 'v3', 'v4', 'v5', 'v6', 'v7', 'v8', 'v9', 'v10']; // Sesuaikan dengan kolom yang valid
        if (!in_array($column, $validColumns)) {
            return response()->json(['success' => false, 'message' => 'Invalid column.'], 400);
        }

        // Temukan data berdasarkan ID
        $mutasiInstansi = MutasiInstansi::where('id', $id)->first();  // Cari dengan where
        if (!$mutasiInstansi) {
            return response()->json(['success' => false, 'message' => 'Data not found.'], 404);
        }

        // Update kolom yang sesuai
        $mutasiInstansi->$column = $value;
        $mutasiInstansi->save();

        return response()->json(['success' => true]);
    }









    public function destroy($mutasiinstansi)
    {
        MutasiInstansi::destroy($mutasiinstansi);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
