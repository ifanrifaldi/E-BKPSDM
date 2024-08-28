<?php

namespace App\Models;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\Komentar;


class BalasanKomentar extends ModelAuthenticate
{
    protected $table ="balasan_komentar";

    function Blog()
    {
        return $this->belongsTo(Blog::class, 'id_blog');
 
    }

    function Komentar()
    {
        return $this->belongsTo(Komentar::class, 'id_komentar');
 
    }
}
