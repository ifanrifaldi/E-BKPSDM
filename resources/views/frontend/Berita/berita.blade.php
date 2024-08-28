@extends('template.base')
@section('title', 'Berita')
@section('content')
@include('layout.menu.menu')

<style>
    .pagination-wrapper {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination .page-item.active .page-link {
        background-color: #a4c639;
        border-color: #a4c639;
    }

    .pagination .page-link {
        color: #a4c639;
        border-radius: 5px;
        border: 1px solid #ddd;
        padding: 8px 12px;
        margin: 0 3px;
        font-size: 0.9em;
    }

    .pagination .page-link:hover {
        background-color: #e9f5c1;
        color: #333;
    }

    .news-item {
        margin-bottom: 30px;
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        transition: box-shadow 0.3s ease;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .news-item:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .news-item img {
        max-width: 100%;
        height: auto;
        border-bottom: 1px solid #ddd;
    }

    .news-item-content {
        padding: 20px;
    }

    .news-item h4 {
        font-size: 1.4em;
        margin: 0 0 10px;
        color: #333;
    }

    .news-item a {
        text-decoration: none;
        color: #a4c639;
    }

    .news-item a:hover {
        text-decoration: underline;
    }

    .news-item-meta {
        font-size: 0.9em;
        color: #666;
        margin-bottom: 10px;
    }

    .search-form {
        display: flex;
        align-items: center;
        /* Menyelaraskan item secara vertikal di tengah */
        margin-bottom: 30px;
    }

    .search-form input {
        border-radius: 5px;
        border: 1px solid #ddd;
        padding: 10px;
        flex: 1;
        /* Membuat input mengisi ruang yang tersisa */
        box-sizing: border-box;
        margin-right: 0;
        /* Tidak ada margin di sebelah kanan */
    }

    .search-form button {
        border: none;
        background-color: #a4c639;
        color: #fff;
        border-radius: 5px;
        padding: 10px 15px;
        font-size: 1em;
        cursor: pointer;
        transition: background-color 0.3s ease;
        display: flex;
        align-items: center;
        /* Menyelaraskan ikon di tengah vertikal */
    }

    .search-form button i {
        font-size: 1.2em;
        /* Ukuran ikon pencarian */
        margin: 0;
        /* Menghilangkan margin ikon */
    }

    .search-form button:hover {
        background-color: #8a9e2b;
    }

    .recent-news {
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 15px;
        background-color: #fff;
    }

    .recent-news h4 {
        margin-bottom: 15px;
        color: #333;
    }

    .recent-news ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .recent-news li {
        margin-bottom: 15px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
    }

    .recent-news li:last-child {
        border-bottom: none;
    }

    .recent-news li h5 {
        margin-bottom: 5px;
        font-size: 1.1em;
        color: #333;
    }

    .recent-news li a {
        text-decoration: none;
        color: #a4c639;
    }

    .recent-news li a:hover {
        text-decoration: underline;
    }

    .filled-button {
        background-color: #a4c639;
        /* Warna latar belakang tombol */
        color: #fff;
        /* Warna teks tombol */
        border: none;
        /* Menghilangkan border tombol */
        border-radius: 5px;
        /* Radius sudut tombol */
        padding: 10px 20px;
        /* Padding tombol */
        text-decoration: none;
        /* Menghilangkan garis bawah pada teks tombol */
        font-size: 1em;
        /* Ukuran font tombol */
        cursor: pointer;
        /* Menampilkan pointer saat hover */
        transition: background-color 0.3s ease;
        /* Transisi perubahan warna latar belakang */
    }

    .filled-button:hover {
        background-color: #8a9e2b;
        /* Warna latar belakang saat hover */
    }
</style>

<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>BERITA</h1>
                <span>BKPSDM KAB. KETAPANG</span>
            </div>
        </div>
    </div>
</div>

<div class="single-services">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <section class='tabs-content'>
                    @foreach ($list_berita as $berita)
                    <article class='news-item'>
                        <a href="{{ url("blog-detail/$berita->id") }}" target="_blank">
                            <img src="{{ asset('public/' . $berita->gambar) }}" class="img-fluid" alt="Thumbnail">
                        </a>
                        <div class="news-item-content">
                            <h4><a href="{{ url("blog-detail/$berita->id") }}">{{ $berita->judul }}</a></h4>
                            <div class="news-item-meta">
                                <span>{{ $berita->nama_penulis }} &nbsp;|&nbsp;
                                    {{ $berita->created_at->format('d M Y H:i') }} &nbsp;|&nbsp;Komentar {{ $berita->total_komentar_dan_balasan }}</span>
                            </div>
                            <div>
                                <div>
                                    <a href="{{ url("blog-detail/$berita->id") }}" class="filled-button" style="color: white; background-color: #a4c639;" onmouseover="this.style.backgroundColor='gray';" onmouseout="this.style.backgroundColor='#a4c639';" onmousedown="this.style.backgroundColor='gray';" onmouseup="this.style.backgroundColor='#a4c639';">
                                        Baca Selengkapnya
                                    </a>
                                </div>


                            </div>


                        </div>
                    </article>
                    @endforeach
                    <!-- Menambahkan link paginasi -->
                    <div class="pagination-wrapper mt-4">
                        {{ $list_berita->links('pagination::bootstrap-4') }}
                    </div>
                </section>
            </div>

            <div class="col-md-4">
                <div class="search-form" style="display: flex; align-items: center;">
                    <form id="search_form" name="gs" method="GET" action="{{ route('filter') }}" style="display: flex; align-items: center;">
                        <input type="text" name="q" class="form-control form-control-lg" placeholder="Cari Disini ..." autocomplete="on" style="flex: 1; margin-right: 5px;">
                        <button type="submit" style="height: 100%; display: flex; align-items: center; justify-content: center;">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>


                <div class="recent-news">
                    <h4 class="h4">Berita Terbaru</h4>
                    <ul>
                        @foreach ($recent_berita as $berita)
                        <li>
                            <h5><a href="{{ url("blog-detail/$berita->id") }}">{{ $berita->judul }}</a></h5>
                            <small><i class="fa fa-user"></i> {{ $berita->nama_penulis }} &nbsp;|&nbsp; <i class="fa fa-calendar"></i>
                                {{ date('d-m-Y', strtotime($berita->created_at)) }} |
                                {{ \Carbon\Carbon::parse($berita->created_at)->locale('id')->diffForHumans() }} </small>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection