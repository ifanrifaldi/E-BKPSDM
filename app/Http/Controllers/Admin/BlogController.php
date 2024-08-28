<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\BalasanKomentar;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Komentar;

class BlogController extends Controller
{
    
    public function index()
    {
        $data['list_blog'] = Blog::all();

        return view('backend.blog.index', $data);
    }

    public function create()
    {
        return view('backend.blog.create');
    }

    
    public function store()
    {
        $blog = New Blog;
        $blog->nama_penulis = request('nama_penulis');
        $blog->judul = request('judul');
        $blog->isi = request('isi');
        $blog->handleUploadFoto();
        $blog->save();

        return redirect('admin/blog')->with('success', 'Data Berhasil di Simpan');
    }

    
    public function show($blog)
    {
        $data['blog'] = Blog::find($blog);
        return view('backend.blog.show', $data);
    }

    
    public function edit($blog)
    {
        $data['blog'] = Blog::find($blog);
        
        return view('backend.blog.edit', $data);
    }

    
    public function update($blog)
    {
        $blog = Blog::find($blog);
        $blog->nama_penulis = request('nama_penulis');
        $blog->judul = request('judul');
        $blog->isi = request('isi');
        $blog->handleUploadFoto();
        $blog->save();

        return redirect('admin/blog')->with('warning', 'Data Berhasil Di Edit');
    }

   
    public function destroy($blog)
    {
        Blog::destroy($blog);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }

    public function showKomentar($blog)
    {
        $data['blog'] = Blog::find($blog);
        $data['list_komentar'] = Komentar::where('id_blog', $blog)->get();
        $data['list_balasan_komentar'] = BalasanKomentar::all();

        return view('backend.blog.komentar', $data);
    }

    public function storeBalasan()
    {
        $balasan_komentar = New BalasanKomentar;
        $balasan_komentar->id_blog = request('id_blog');
        $balasan_komentar->id_komentar = request('id_komentar');
        $balasan_komentar->text = request('text');
        $balasan_komentar->nama_pengirim = request('nama_pengirim');
        $balasan_komentar->send = 2;
        $balasan_komentar->save();

        return back()->with('success', 'Komentar Berhasil Di Balas');
    }
}
