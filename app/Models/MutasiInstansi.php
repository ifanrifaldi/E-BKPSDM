<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Model;

class MutasiInstansi extends Model
{
    protected $fillable = [
        'id_pegawai',
        'nama',
        'nip',
        'no_hp',
        'alamat',
        'asal',
        'tujuan',
        'status',
        'pesan',
        'v1',
        'v2',
        'v3',
        'v4',
        'v5',
        'v6',
        'v7',
        'v8',
        'v9',
        'v10',
        'foto',
        'spm',
        'sum',
        'spp',
        'spdi',
        'spstmtb',
        'skjt',
        'sk_pns',
        'skp',
        'skbt',
        'alasan',
    ];

    protected $table = "mutasi_instansi";

    // public function pegawai()
    // {
    //     return $this->belongsTo(Pegawai::class);
    // }

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    // Definisikan relasi dengan model Pegawai
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function handleUploadFiles()
    {
        $fileTypes = ['foto', 'spm', 'sum', 'spp', 'spdi', 'spstmtb', 'skjt', 'sk_pns', 'skp', 'skbt', 'alasan'];

        foreach ($fileTypes as $fileType) {
            if (request()->hasFile($fileType)) {
                $this->handleFileUpload($fileType);
            }
        }
    }

    private function handleFileUpload($fileType)
    {
        $file = request()->file($fileType);
        $destination = public_path("app/mutasi_instansi/{$fileType}"); // Folder sesuai dengan nama kolom
        $randomStr = Str::random(5);
        $filename = time() . "-" . $randomStr . "." . $file->getClientOriginalExtension();
        $file->move($destination, $filename);

        // Simpan nama file ke dalam database
        $this->$fileType = $filename;
    }
}
