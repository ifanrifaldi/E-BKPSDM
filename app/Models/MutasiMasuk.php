<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Model;

class MutasiMasuk extends Model
{
    protected $table="mutasi_masuk_daerah";

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function handleUploadFiles()
    {
        $fileTypes = ['foto','spp', 'spdi', 'spstmtb', 'skjt', 'sk_pns', 'skp', 'skbt', 'alasan'];

        foreach ($fileTypes as $fileType) {
            if (request()->hasFile($fileType)) {
                $this->handleFileUpload($fileType);
            }
        }
    }

    private function handleFileUpload($fileType)
    {
        $file = request()->file($fileType);
        $destination = public_path("app/mutasi_masuk_daerah/{$fileType}"); // Folder sesuai dengan nama kolom
        $randomStr = Str::random(5);
        $filename = time() . "-" . $randomStr . "." . $file->getClientOriginalExtension();
        $file->move($destination, $filename);

        // Simpan nama file ke dalam database
        $this->$fileType = $filename;
    }    
}

