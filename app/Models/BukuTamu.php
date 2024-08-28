<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Model;

class BukuTamu extends Model
{
    protected $table="buku_tamu";

    function handleUploadFoto()
    {
        if (request('foto')) {
            $imageDataUri  = request('foto');
            $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imageDataUri));
            $destination = "app/buku_tamu";
            if(!file_exists(public_path($destination))) {
                mkdir(public_path($destination));
            }
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . ".png" ;
            file_put_contents(public_path($destination."/".$filename), $imageData);
            $url = "$destination/$filename";
            return $url;
        }
    }
}
