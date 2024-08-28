@extends('template.base')
@section('title', 'Berita')
@section('content')
@include('layout.menu.menu')

<div class="page-heading header-text text-center">
    <div class="container">
        <h1>BERITA</h1>
        <span>BKPSDM KAB. KETAPANG</span>
    </div>
</div>

<div class="more-info about-info">
    <div class="container">
        <div class="more-info-content">
            <div class="right-content">
                <h2>{{ $berita->judul }}</h2>
                <p class="meta-info"><i class="fa fa-calendar"></i> {{ $berita->created_at->format('d M Y') }} &nbsp;|&nbsp; <i class="fa fa-user"></i> {{ $berita->nama_penulis }} </p>
                <img src="{{ url("public/$berita->gambar") }}" alt="{{ $berita->gambar }}" class="img-fluid berita-img mb-4">
                <div class="berita-isi">
                    {!! nl2br($berita->isi) !!}
                </div>
            </div>
            <div class="action-buttons mt-4">
                <a href="https://api.whatsapp.com/send?text={{ urlencode($berita->judul) }}%0A%0A{{ urlencode(url()->current()) }}" class="btn btn-action btn-whatsapp" target="_blank" style="background-color: #a4c639;">
                    <i class="fa fa-whatsapp"></i> Bagikan di WhatsApp
                </a>
                <a href="https://www.instagram.com/?url={{ urlencode(url()->current()) }}" class="btn btn-action btn-instagram" target="_blank" style="background-color: #666666;">
                    <i class="fa fa-instagram"></i> Bagikan di Instagram
                </a>
                <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-action btn-comment" style="background-color: #a4c639;"> <i class="fa fa-comment"></i> Masukan Komentar Anda</a>
            </div>
            <br>
            @if(count($list_komentar) > 0)
            <br>
            <!-- <div class="callback-form contact-us" style="background-color: white;" >  -->
            <div class="more-info about-info mt-3">
                <div class="container">
                    <h1>Komentar</h1>
                    <br>
                    <div class="more-info-content">
                        @foreach ($list_komentar as $komentar)
                        @if ($komentar->id_blog == $berita->id)
                        <div class="media comment mb-3">
                            <img class="mr-3 rounded-circle" style="width: 50px;" src="{{ url('public/admin') }}/user.PNG" alt="User image">
                            <div class="media-body">
                                <h5 class="mt-0">{{ $komentar->nama_pengirim }}</h5>
                                <p class="komentar-text">{{ $komentar->text }}</p>
                                <p class="meta-info"><i class="fa fa-calendar"></i> {{ $komentar->created_at->format('d M Y H:i') }}</p>
                                @foreach ($list_balasan_komentar as $balasan_komentar)
                                @if ($balasan_komentar->id_komentar == $komentar->id)
                                <div class="media mt-3 reply">
                                    <img class="mr-3 rounded-circle" style="width: 40px;" src="{{ url('public/admin') }}/user.PNG" alt="User image">
                                    <div class="media-body">
                                        <h5 class="mt-0">{{ $balasan_komentar->nama_pengirim }}</h5>
                                        <p class="komentar-text">{!! nl2br($balasan_komentar->text) !!}</p>
                                        <p class="meta-info"><i class="fa fa-calendar"></i> {{ $balasan_komentar->created_at->format('d M Y H:i') }}</p>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <br>
            <!-- </div> -->
            @endif

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form action="{{ url('store-komentar') }}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Masukan Komentar Anda</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" value="{{ $berita->id }}" name="id_blog">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nama_pengirim" placeholder="Masukan Nama Anda" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email_pengirim" placeholder="Masukan Email Anda" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea type="text" class="form-control" name="text" placeholder="Masukan Komentar Anda"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                <button class="btn btn-primary">Kirim Komentar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<style>
    .header-text {
        text-align: center;
        margin-bottom: 30px;
    }

    .meta-info {
        color: #6c757d;
        font-size: 0.9rem;
    }

    .berita-img {
        width: 100%;
        height: auto;
        max-height: 500px;
        object-fit: cover;
        border-radius: 10px;
    }

    .berita-isi {
        text-align: justify;
        line-height: 1.6;
    }

    .comment,
    .reply {
        background-color: #f9f9f9;
        padding: 15px;
        border-radius: 10px;
        margin-bottom: 15px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .reply {
        background-color: #dfe6e9;
        margin-left: 50px;
    }

    .media-body h5 {
        font-size: 1.2rem;
        font-weight: bold;
        color: #007bff;
    }

    .media-body p {
        font-size: 1rem;
        margin-top: 5px;
    }

    .action-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .btn-action {
        flex: 1;
        display: inline-block;
        padding: 10px 20px;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
        text-align: center;
        transition: background-color 0.3s ease;
    }

    .btn-whatsapp {
        background-color: #25D366;
    }

    .btn-whatsapp:hover {
        background-color: #1EBE5D;
    }

    .btn-instagram {
        background-color: #E1306C;
    }

    .btn-instagram:hover {
        background-color: #C1275C;
    }

    .btn-comment {
        background-color: #28a745;
    }

    .btn-comment:hover {
        background-color: #218838;
    }

    .btn i {
        margin-right: 5px;
    }

    .modal-content {
        padding: 20px;
    }

    .modal-header {
        border-bottom: none;
    }

    .modal-title {
        margin: 0 auto;
    }

    .close {
        position: absolute;
        right: 20px;
        top: 20px;
    }

    .modal-dialog-centered {
        display: flex;
        align-items: center;
        min-height: calc(100% - 1rem);
    }

    .komentar-text {
        font-size: 1.2rem;
        /* Ukuran teks diperbesar */
        font-weight: 500;
        /* Memberikan bobot yang lebih pada teks */
        margin-bottom: 10px;
        /* Memberikan jarak antara teks dan tanggal */
    }

    .meta-info {
        color: #6c757d;
        font-size: 0.9rem;
    }
</style>
@endsection