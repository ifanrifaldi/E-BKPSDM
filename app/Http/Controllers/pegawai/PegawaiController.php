<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\ProsedurPengajuan;

class PegawaiController extends Controller
{
    public function dashboard()
    {
        // Ambil data prosedur pengajuan, misalnya dari model ProsedurPengajuan
        $prosedurpengajuan = ProsedurPengajuan::first(); // Misalnya, ambil data pertama dari tabel prosedur_pengajuan

        // Kirimkan data prosedur pengajuan ke view
        return view('pegawai.index', ['prosedurpengajuan' => $prosedurpengajuan]);
    }
    public function index()

    {
        $pegawaiId = auth()->guard('pegawai')->user()->id;

        // Mengambil data mutasi instansi berdasarkan ID pegawai yang sedang login
        $data['list_pegawai'] = Pegawai::where('id', $pegawaiId)->get();
        // $data['list_pegawai'] = Pegawai::all();
        return view('pegawai.pegawai.index', $data);
    }


    public function store()
    {
        $pegawai = new Pegawai;
        $pegawai->nama = request('nama');
        $pegawai->nip = request('nip');
        $pegawai->jenis_kelamin = request('jenis_kelamin');
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
        $pegawai->no_hp = request('no_hp');
        $pegawai->email = request('email');
        if (request('password')) $pegawai->password = request('password');
        $pegawai->handleUploadFoto();

        $pegawai->save();

        return back()->with('warning', 'Data Berhasil Di Edit');
    }


    public function destroy($pegawai)
    {
        Pegawai::destroy($pegawai);

        return back()->with('danger', 'Data Berhasil Di hapus');
    }

    // Method untuk menampilkan form edit password
    public function editPassword($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.pegawai.editpassword', compact('pegawai'));
    }

    // Method untuk menyimpan perubahan password
    public function updatePassword(Request $request, $id)
    {
        // Pastikan password yang diterima tidak kosong
        if (!$request->filled('password')) {
            return redirect()->back()->with('error', 'Password harus diisi.');
        }

        // Update password pegawai
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->password = $request->password; // Simpan password tanpa hashing

        $pegawai->save();

        return redirect()->route('pegawai.index')->with('warning', 'Password berhasil diubah.');
    }
}
