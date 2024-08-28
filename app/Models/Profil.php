<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Model;

class Profil extends Model
{
    protected $table = "profil";

    public function handleUploadFiles()
    {
        $fileTypes = ['profil'];

        foreach ($fileTypes as $fileType) {
            if (request()->hasFile($fileType)) {
                $this->handleFileUpload($fileType);
            }
        }
    }

    private function handleFileUpload($fileType)
    {
        $file = request()->file($fileType);
        $destination = public_path("app/profil/{$fileType}"); // Folder sesuai dengan nama kolom
        $randomStr = Str::random(5);
        $filename = time() . "-" . $randomStr . "." . $file->getClientOriginalExtension();
        $file->move($destination, $filename);

        // Simpan nama file ke dalam database
        $this->$fileType = $filename;
    }
}
