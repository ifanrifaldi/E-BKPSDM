<?php

namespace App\Models;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Str;

class Pegawai extends ModelAuthenticate
{
    protected $table = "pegawai";


    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    // public function mutasiInstansi()
    // {
    //     return $this->hasMany(MutasiInstansi::class);
    // }
    public function mutasiSekolah()
    {
        return $this->hasMany(MutasiSekolah::class);
    }
    public function mutasiMasuk()
    {
        return $this->hasMany(MutasiMasuk::class);
    }
    public function mutasiKeluar()
    {
        return $this->hasMany(MutasiKeluar::class);
    }
    public function pensiundizur()
    {
        return $this->hasMany(PensiunDizur::class);
    }


    // Relasi dengan MutasiInstansi
    public function mutasiInstansi()
    {
        return $this->hasMany(MutasiInstansi::class, 'id_pegawai');
    }

    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "pegawai";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
        }
    }
}
