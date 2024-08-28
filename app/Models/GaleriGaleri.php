<?php

namespace App\Models;
use Illuminate\Support\Str;
use App\Models\Galeri;

class GaleriGaleri extends Model
{
    protected $table="galeri_galeri";

    function Galeri()
    {
        return $this->belongsTo(Galeri::class, 'id_galeri');
 
    }

    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "galeri-galeri";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }
}
