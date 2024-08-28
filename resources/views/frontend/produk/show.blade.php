@extends('template.base')
@section('content')
@section('title')
    {{ $jenis_produk->nama }}
@endsection

@include('layout.menu.menu')
<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $jenis_produk->nama }}</h1>
                <span>KONVEKSI PONTIANAK</span>
            </div>
        </div>
    </div>
</div>

<div class="services">
    <div class="container">
        <div class="row">
            @foreach ($list_produk as $produk)
                <div class="col-md-4">
                    <div class="service-item">
                        <img src="{{ url("public/$produk->foto") }}"
                            style="object-fit: cover; position: static; width: 100%; height: 400px;">
                        <div class="down-content">
                            <h4 class="text-center">
                                {{ $produk->nama }}
                            </h4>
                            <div style="margin-bottom:10px;" class="text-justify">
                                <span>
                                    {!! nl2br($produk->deskripsi_produk) !!}
                                </span>
                            </div>

                            <a href="#" class="filled-button">
                                Order Now
                            </a>

                            <a href="#" data-toggle="modal" data-target="#modal-produ{{ $produk->id }}"
                                class="filled-button">
                                Detail
                            </a>
                        </div>
                    </div>

                    <br>
                    <br>
                    <div class="modal fade" id="modal-produ{{ $produk->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 70px;">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{ $produk->nama }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="row">
                                        @foreach ($list_galeri_produk as $galeri_produk)
                                            @if ($galeri_produk->id_produk == $produk->id)
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <img src="{{ url("public/$galeri_produk->foto") }}"
                                                            style="object-fit: cover; position: static; width: 90%; height: 200px;">
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


@endsection
