<?php

namespace App\Models;
use Illuminate\Support\Str;
use App\Models\Model;
use App\Models\JenisProduk;
use App\Models\GaleriProduk;

class Produk extends Model
{
    protected $table="produk";

    function JenisProduk()
    {
        return $this->belongsTo(JenisProduk::class, 'id_jenis_produk');
 
    }

    
    function GaleriProduk()
    {
        return $this->belongsTo(GaleriProduk::class, 'id');
 
    }

    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "produk";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }
}
