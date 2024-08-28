<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Model;

class ProsedurPengajuan extends Model
{
    protected $table="prosedur_pengajuan";

    public function handleUploadFiles()
    {
        $fileTypes = ['instansi', 'sekolah','masuk','keluar', 'dizur', 'bujaduya'];

        foreach ($fileTypes as $fileType) {
            if (request()->hasFile($fileType)) {
                $this->handleFileUpload($fileType);
            }
        }
    }

    private function handleFileUpload($fileType)
    {
        $file = request()->file($fileType);
        $destination = public_path("app/prosedur_pengajuan/{$fileType}"); // Folder sesuai dengan nama kolom
        $randomStr = Str::random(5);
        $filename = time() . "-" . $randomStr . "." . $file->getClientOriginalExtension();
        $file->move($destination, $filename);

        // Simpan nama file ke dalam database
        $this->$fileType = $filename;
    }    
}

