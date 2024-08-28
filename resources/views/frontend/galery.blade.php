@extends('template.base')
@section('title', 'Galery')
@section('content')

@include('layout.menu.menu')
<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>GALERY HASIL PRODUKSI</h1>
                <span>KONVEKSI PONTIANAK</span>
            </div>
        </div>
    </div>
</div>

<div class="services">
    <div class="container">
        <div class="row">
            @foreach ($list_galeri as $galeri)
            <div class="col-md-4">
                <div class="service-item">
                    <img src="{{ url("public/$galeri->foto") }}"
                        style="object-fit: cover; position: static; width: 100%; height: 400px;">
                    <div class="down-content">
                        <h4>{{ $galeri->label }}</h4>
                        <div style="margin-bottom:10px;">
                            <h6><b>Pemesan :</b> {{ $galeri->pemesan }}</h6>
                            <h6><b>Bahan :</b> {{ $galeri->bahan }}</h6>
                            <h6><b>Jumlah :</b> {{ $galeri->jumlah }} Pcs</h6>
                        </div>

                        <a href="#" data-toggle="modal" data-target="#modal-produ{{ $galeri->id }}"
                            class="filled-button">
                            Detail
                        </a>

                        <div class="modal fade" id="modal-produ{{ $galeri->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 70px;">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">{{ $galeri->nama }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="row">
                                            @foreach ($list_galeri_galeri as $galeri_galeri)
                                            @if ($galeri_galeri->id_galeri == $galeri->id)
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <img src="{{ url("public/$galeri_galeri->foto") }}"
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

                </div>

                <br>
            </div>
            @endforeach
        </div>
    </div>
</div>



            @endsection