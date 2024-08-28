<?php

namespace App\Models;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Str;

class Admin extends ModelAuthenticate
{
    protected $table ="admin";

    public function mutasiInstansi()
    {
        return $this->hasMany(MutasiInstansi::class);
    }
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

    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "data-admin";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            
        }
    }
}
