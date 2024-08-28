<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MutasiInstansi;
use Illuminate\Support\Str; // Tambahkan ini untuk mengimpor Str

class MutasiInstansiController extends Controller
{

    public function index()
    {
        $pegawaiId = auth()->guard('pegawai')->user()->id;

        // Mengambil data mutasi instansi berdasarkan ID pegawai yang sedang login
        $data['list_mutasiinstansi'] = MutasiInstansi::where('id_pegawai', $pegawaiId)->get();

        return view('pegawai.mutasiinstansi.index', $data);
    }


    public function create()
    {
        $data['pegawai'] = $pegawai = auth()->guard('pegawai')->user();
        return view('pegawai.mutasiinstansi.create', $data);
    }


    public function store(Request $request)
    {
        $mutasiinstansi = new MutasiInstansi();

        $mutasiinstansi->id_pegawai = request('id_pegawai');
        $mutasiinstansi->nama = request('nama');
        $mutasiinstansi->nip = request('nip');
        $mutasiinstansi->no_hp = request('no_hp');
        $mutasiinstansi->alamat = request('alamat');
        $mutasiinstansi->asal = request('asal');
        $mutasiinstansi->tujuan = request('tujuan');
        $mutasiinstansi->status = 'Draft';
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
        $mutasiinstansi->pesan = 'Lengkapi Berkas';

        $mutasiinstansi->handleUploadFiles();
        $mutasiinstansi->save();

        return redirect()->route('mutasiinstansi.edit', $mutasiinstansi->id)
            ->with('success', 'Pengajuan Sukses, Silahkan Lengkapi Dokumen!');
    }


    public function show($mutasiinstansi)
    {
        $data['mutasiinstansi'] = MutasiInstansi::find($mutasiinstansi);

        return view('pegawai.mutasiinstansi.show', $data);
    }
    // public function show($mutasiinstansiId)
    // {
    //     // Ambil data mutasi instansi beserta data pegawai yang terkait
    //     $mutasiinstansi = MutasiInstansi::with('pegawai')->find($mutasiinstansiId);

    //     // Periksa apakah data ditemukan
    //     if (!$mutasiinstansi) {
    //         abort(404, 'Data mutasi instansi tidak ditemukan.');
    //     }

    //     // Kirim data ke view
    //     return view('backend.mutasiinstansi.show', [
    //         'mutasiinstansi' => $mutasiinstansi,
    //         'pegawai' => $mutasiinstansi->pegawai
    //     ]);
    // }
    public function edit($mutasiinstansi)
    {
        $data['pegawai'] = $pegawai = auth()->guard('pegawai')->user();
        $data['mutasiinstansi'] = MutasiInstansi::find($mutasiinstansi);

        return view('pegawai.mutasiinstansi.edit', $data);
    }

    public function Post(MutasiInstansi $mutasiinstansi, Request $request)
    {
        // Dump data request untuk pemeriksaan
        // dd([
        //     'request_data' => $request->all(),
        //     'has_files' => $request->hasFile('foto') || $request->hasFile('spm') || $request->hasFile('sum') || $request->hasFile('spp') || $request->hasFile('spdi') || $request->hasFile('spstmtb') || $request->hasFile('skjt') || $request->hasFile('sk_pns') || $request->hasFile('skp') || $request->hasFile('skbt') || $request->hasFile('alasan'),
        //     'files' => [
        //         'foto' => $request->file('foto'),
        //         'spm' => $request->file('spm'),
        //         'sum' => $request->file('sum'),
        //         'spp' => $request->file('spp'),
        //         'spdi' => $request->file('spdi'),
        //         'spstmtb' => $request->file('spstmtb'),
        //         'skjt' => $request->file('skjt'),
        //         'sk_pns' => $request->file('sk_pns'),
        //         'skp' => $request->file('skp'),
        //         'skbt' => $request->file('skbt'),
        //         'alasan' => $request->file('alasan'),
        //     ],
        // ]);
        // Update model dengan data dari request, kecuali file upload
        $mutasiinstansi->fill($request->except('file_upload'));

        // Proses file upload jika ada file baru
        $fileTypes = ['foto', 'spm', 'sum', 'spp', 'spdi', 'spstmtb', 'skjt', 'sk_pns', 'skp', 'skbt', 'alasan'];

        foreach ($fileTypes as $fileType) {
            if ($request->hasFile($fileType)) {
                $file = $request->file($fileType);
                $destination = public_path("app/mutasi_instansi/{$fileType}"); // Folder sesuai dengan nama kolom
                $randomStr = Str::random(5);
                $filename = time() . "-" . $randomStr . "." . $file->getClientOriginalExtension();
                $file->move($destination, $filename);

                // Simpan nama file ke dalam database
                $mutasiinstansi->$fileType = $filename;
            }
        }

        // Simpan perubahan
        $mutasiinstansi->save();

        return redirect("pegawai/mutasiinstansi/{$mutasiinstansi->id}/edit")
            ->with('success', 'Data Berhasil Diupload!');
    }

    public function updateStatus(MutasiInstansi $mutasiinstansi)
    {
        // Set nilai langsung ke kolom status dan pesan
        $mutasiinstansi->status = 'Diajukan'; // Ganti dengan nilai yang Anda inginkan
        $mutasiinstansi->pesan = 'Pengajuan Baru'; // Ganti dengan nilai yang Anda inginkan

        // Simpan perubahan ke database
        $mutasiinstansi->save();

        return redirect("pegawai/mutasiinstansi/{$mutasiinstansi->id}/edit")
            ->with('success', 'Status dan Pesan Berhasil Diperbarui!');
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

        $mutasiinstansi->handleUploadFiles();
        $mutasiinstansi->save();

        return redirect("pegawai/mutasiinstansi/{$mutasiinstansi->id}/edit")
            ->with('success', 'Data Berhasil Diupload!');
    }


    public function destroy($mutasiinstansi)
    {
        MutasiInstansi::destroy($mutasiinstansi);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
