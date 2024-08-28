<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Model;

class Mitra extends Model
{
    protected $table="mitra";

    function handleUploadFoto()
    {
        if (request()->hasFile('logo')) {
            $logo = request()->file('logo');
            $destination = "mitra";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $logo->extension();
            $url = $logo->storeAs($destination, $filename);
            $this->logo = "app/" . $url;
            $this->save();

        }
    }
}
