<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Model;

class PensiunBujaduya extends Model
{
    protected $table="pensiun_bujaduya";

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
        $fileTypes = ['foto', 'spcp','bpcp','sppn','skhd','skcpns','skjt','drp','berkala','skp','skc',
        'kk','an','ac','ak','akan','skjd','skms','fpp','rekening','npwp','ktp','taspen','skbb','skpt','skmkp','tpdh'];

        foreach ($fileTypes as $fileType) {
            if (request()->hasFile($fileType)) {
                $this->handleFileUpload($fileType);
            }
        }
    }

    private function handleFileUpload($fileType)
    {
        $file = request()->file($fileType);
        $destination = public_path("app/pensiun_bujaduya/{$fileType}"); // Folder sesuai dengan nama kolom
        $randomStr = Str::random(5);
        $filename = time() . "-" . $randomStr . "." . $file->getClientOriginalExtension();
        $file->move($destination, $filename);

        // Simpan nama file ke dalam database
        $this->$fileType = $filename;
    }    
}

