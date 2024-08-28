@extends('template.admin')
@section('content')
<section class="content">
    <div class="card" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div class="card-header d-flex justify-content-between align-items-center" style="border-radius: 15px 15px 0 0; background-color: #28A745;">
            <h3 class="card-title m-0" style="font-weight: bold; color: #FFFFFF;">
                {{ $blog->judul }}
            </h3>
            <a href="{{ url('admin/blog') }}" class="btn btn-light ml-auto" ><i class="fas fa-arrow-left" style="color: #28A745;"></i> </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-8 order-2 order-md-1">
                    <div class="info-box bg-light mb-4">
                        <div class="info-box-content">
                            <img src="{{ url("public/$blog->gambar") }}" class="img-fluid rounded" alt="Blog Image">
                        </div>
                    </div>
                    <div>
                        <h4>Komentar</h4>
                        @foreach ($list_komentar as $komentar)
                        <div class="post mb-4 p-3 bg-white rounded shadow-sm">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="{{ url('public/admin/user.PNG') }}" alt="user image">
                                <span class="username">
                                    <a href="#">{{ $komentar->nama_pengirim }}</a>
                                </span>
                                <span class="description">{{ date('d-M-Y', strtotime($komentar->created_at)) }}</span>
                                <button class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#modal-komentar{{ $komentar->id }}">
                                    <span class="fa fa-comment"></span> Balas Komentar
                                </button>
                            </div>
                            <p>{!! nl2br($komentar->text) !!}</p>
                            @foreach ($list_balasan_komentar as $balasan_komentar)
                            @if ($balasan_komentar->id_komentar == $komentar->id)
                            <div class="post ml-4 p-3 mt-2 bg-light rounded shadow-sm">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="{{ url('public/admin/user.PNG') }}" alt="user image">
                                    <span class="username">
                                        <a href="#">{{ $balasan_komentar->nama_pengirim }}</a>
                                    </span>
                                    <span class="description">{{ date('d-M-Y', strtotime($balasan_komentar->created_at)) }}</span>
                                </div>
                                <p>{!! nl2br($balasan_komentar->text) !!}</p>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="modal fade" id="modal-komentar{{ $komentar->id }}">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Balas Komentar {{ $komentar->nama_pengirim }}</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ url('admin/blog/store-balasan') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id_blog" value="{{ $komentar->id_blog }}">
                                        <input type="hidden" name="id_komentar" value="{{ $komentar->id }}">
                                        <input type="hidden" name="nama_pengirim" value="{{ $admin->nama }}">
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Masukan Pesan Anda</label>
                                                <div class="col-sm-9">
                                                    <textarea name="text" class="form-control" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success"><span class="fa fa-paper-plane"></span> Kirim</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-12 col-md-4 order-1 order-md-2">
                    <h3 class="text-primary"><i class="fas fa-user" style="color: #28A745;"></i> {{ $blog->nama_penulis }}</h3>
                    <p class="text-muted">{!! nl2br($blog->isi) !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection