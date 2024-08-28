<?php

namespace App\Models;

use App\Models\Model;
use App\Models\Produk;

class JenisProduk extends Model
{
    protected $table="jenis_produk";

    function Produk()
    {
        return $this->belongsTo(Produk::class, 'id');
 
    }
}
