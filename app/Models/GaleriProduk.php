<?php

namespace App\Models;
use Illuminate\Support\Str;
use App\Models\Model;
use App\Models\Produk;

class GaleriProduk extends Model
{
    protected $table="galeri_produk";

    function Produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
 
    }

    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "galeri-produk";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }
}
