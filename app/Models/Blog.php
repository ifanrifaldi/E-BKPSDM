<?php

namespace App\Models;
use Illuminate\Support\Str;
use App\Models\Model;
use App\Models\Komentar;
use App\Models\BalasanKomentar;

class Blog extends Model
{
    protected $table="blog";

    function Komentar()
    {
        return $this->belongsTo(Komentar::class, 'id');
 
    }

    function BalasanKomentar()
    {
        return $this->belongsTo(BalasanKomentar::class, 'id');
 
    }
    
    function handleUploadFoto()
    {
        if (request()->hasFile('gambar')) {
            $gambar = request()->file('gambar');
            $destination = "blog";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $gambar->extension();
            $url = $gambar->storeAs($destination, $filename);
            $this->gambar = "app/" . $url;
            $this->save();

        }
    }
}
