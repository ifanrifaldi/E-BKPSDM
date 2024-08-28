<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BalasanKomentar;
use App\Models\Blog;
use App\Models\Galeri;
use App\Models\GaleriGaleri;
use App\Models\GaleriProduk;
use App\Models\JenisProduk;
use App\Models\Produk;

use App\Models\Komentar;
use App\Models\Mitra;
use App\Models\Profil;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function beranda()
    {
        $data['list_mitra'] = Mitra::all();
        $data['list_berita'] = Blog::orderBy('id', 'desc')->take(3)->get();
        $data['list_galeri'] = Galeri::orderBy('id', 'desc')->take(3)->get();
        $data['list_jenis_produk'] = JenisProduk::all();
        return view('frontend.beranda', $data);
    }
    // Profil
    function profil()
    {
        $data['list_profil'] = Profil::all();
        $data['list_berita'] = Blog::all();
        $data['list_mitra'] = Mitra::all();
        $data['list_jenis_produk'] = JenisProduk::all();
        return view('frontend.profil.profil', $data);
    }
    //seaching
    public function filter(Request $request)
    {
        // Ambil data mitra dan jenis produk tanpa paginasi
        $data['list_mitra'] = Mitra::all();
        $data['recent_berita'] = Blog::all();
        $data['list_jenis_produk'] = JenisProduk::all();

        // Buat query untuk blog
        $query = Blog::query();

        // Tambahkan filter pencarian jika ada
        if ($request->has('q')) {
            $query->where(function ($q) use ($request) {
                $q->where('nama_penulis', 'like', '%' . $request->q . '%')
                    ->orWhere('judul', 'like', '%' . $request->q . '%')
                    ->orWhere('isi', 'like', '%' . $request->q . '%');
            });
        }

        // Terapkan paginasi, misalnya 10 item per halaman
        $data['list_berita'] = $query->paginate(10);

        return view('frontend.berita.berita', $data);
    }

    // Blog 
    function blog()
    {
        $data['list_mitra'] = Mitra::all();
        $data['list_jenis_produk'] = JenisProduk::all();
        return view('frontend.blog.blog', $data);
    }
    function blogdetail()
    {
        $data['list_mitra'] = Mitra::all();
        $data['list_jenis_produk'] = JenisProduk::all();
        return view('frontend.blog.blogdetail', $data);
    }
    // Berita
    function berita()
    {
        $data['list_mitra'] = Mitra::all();
        $data['list_berita'] = Blog::orderBy('created_at', 'desc')->paginate(3);

        // Menghitung jumlah komentar dan balasan untuk setiap blog
        foreach ($data['list_berita'] as $berita) {
            // Jumlah komentar
            $jumlah_komentar = Komentar::where('id_blog', $berita->id)->count();

            // Jumlah balasan dari semua komentar pada blog ini
            $jumlah_balasan = BalasanKomentar::whereIn(
                'id_komentar',
                Komentar::where('id_blog', $berita->id)->pluck('id')
            )->count();

            // Total semua komentar dan balasan
            $berita->total_komentar_dan_balasan = $jumlah_komentar + $jumlah_balasan;
        }

        $data['recent_berita'] = Blog::orderBy('created_at', 'desc')->take(3)->get();
        $data['list_jenis_produk'] = JenisProduk::all();

        return view('frontend.berita.berita', $data);
    }
    function beritadetail(Blog $berita)
    {
        $data['list_mitra'] = Mitra::all();
        $data['berita'] = $berita;
        $data['list_jenis_produk'] = JenisProduk::all();

        $data['list_komentar'] = Komentar::all();
        $data['list_balasan_komentar'] = BalasanKomentar::all();

        return view('frontend.berita.beritadetail', $data);
    }
    // Produk

    public function show($jenis_produk)
    {
        $data['list_mitra'] = Mitra::all();
        $data['jenis_produk'] = JenisProduk::find($jenis_produk);
        $data['list_produk'] = Produk::where('id_jenis_produk', $jenis_produk)->get();
        $data['list_jenis_produk'] = JenisProduk::all();

        $data['list_galeri_produk'] = GaleriProduk::all();

        return view('frontend.produk.show', $data);
    }

    // Cara Order
    function caraorder()
    {
        $data['list_mitra'] = Mitra::all();
        $data['list_jenis_produk'] = JenisProduk::all();
        return view('frontend.caraorder', $data);
    }
    // Cara Order
    function galery()
    {
        $data['list_mitra'] = Mitra::all();
        $data['list_produk'] = Produk::all();
        $data['list_galeri'] = Galeri::all();
        $data['list_galeri_galeri'] = GaleriGaleri::all();
        $data['list_jenis_produk'] = JenisProduk::all();
        return view('frontend.galery', $data);
    }

    public function komen()
    {
        $komentar = new Komentar();
        $komentar->id_blog = request('id_blog');
        $komentar->nama_pengirim = request('nama_pengirim');
        $komentar->email_pengirim = request('email_pengirim');
        $komentar->text = request('text');
        $komentar->send = 1;

        $komentar->save();

        return back()->with('success', 'Data Komentar Berhasil Di simpan');
    }
}
