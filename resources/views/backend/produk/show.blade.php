@extends('template.admin')
@section('content')
    <div class="container-fluid">
        <div class="card card-solid">
            <div class="card-body">
                <div class="header">
                    <a href="{{ url('admin/produk') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>
                        Kembali</a>
                    <br><br>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3 class="d-inline-block d-sm-none">
                            {{ $produk->nama }}
                        </h3>

                        <div class="col-12">
                            <img src="{{ url("public/$produk->foto") }}" class="product-image">
                        </div>
                        <div class="col-md-12 product-image-thumbs">
                            @foreach ($list_galeri_produk as $galeri_produk)
                            <a href="{{ url("admin/produk/delete-galeri/$galeri_produk->id") }}" onclick="return confirm('Yakin Akan Menghapus Data Ini')" class="btn btn-danger btn-xs" style="height: 1%"><span class="fa fa-times"></span></a>
                            <div class="product-image-thumb">
                                <img src="{{ url("public/$galeri_produk->foto") }}">
                            </div>
                            @endforeach
                            
                        </div>

                        <form action="{{ url('admin/produk/store-galeri-produk') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row" style="margin-top:1% ">
                                <div class="col-sm-8">
                                    <input type="text" name="id_produk" value="{{ $produk->id }}" hidden>
                                    <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg">
                                </div>
                                <div class="col-sm-4">
                                    <button class="btn btn-primary"><span class="fa fa-plus"></span> Tambah Galeri
                                        Produk</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-12 col-sm-6">

                        <!-- <h3 class="my-3">{{ $produk->nama }}</h3>
                        <label for="">
                            Harga Pakaian : {{ $produk->harga }}
                        </label>
                        <hr>
                        <label for="">
                            Bahan Pakaian : {!! nl2br($produk->bahan_pakaian) !!}
                        </label>
                        <hr>
                        <h4>Ukuran</h4> -->
                        <div>
                            <p>
                                {!! nl2br($produk->deskripsi_produk) !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
