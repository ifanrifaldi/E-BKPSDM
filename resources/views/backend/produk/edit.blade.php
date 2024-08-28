@extends('template.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Produk</h3>
                    </div>
                    <form action="{{ url('admin/produk', $produk->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Produk</label>
                                <div class="col-sm-10">
                                    <select name="id_jenis_produk" class="form-control">

                                        @foreach ($list_jenis_produk as $jenis_produk)
                                            <option @if ($jenis_produk->id == $produk->id_jenis_produk) selected @endif
                                                value="{{ $jenis_produk->id }}">{{ $jenis_produk->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Produk</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" value="{{ $produk->nama }}">
                                </div>
                            </div>
                           

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Deskripsi Produk</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control summernote" name="deskripsi_produk">{{ $produk->deskripsi_produk }}</textarea>
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-md-5">
                                    <img src="{{ url("public/$produk->foto") }}" class="img-responsive"
                                        style="width:70% ; object-fit: cover">
                                </div>
                                <div class="col-sm-5">
                                    <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg"
                                        value="{{ $produk->foto }}">
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="offset-sm-2 col-sm-10">
                                <button class="btn btn-primary float-right">Simpan</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
