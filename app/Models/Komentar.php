<?php

namespace App\Models;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\BalasanKomentar;


class Komentar extends ModelAuthenticate
{
    protected $table ="komentar";

    function Blog()
    {
        return $this->belongsTo(Blog::class, 'id_blog');
 
    }

    function BalasanKomentar()
    {
        return $this->belongsTo(BalasanKomentar::class, 'id');
 
    }
}
