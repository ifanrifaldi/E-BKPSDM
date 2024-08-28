@extends('template.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Edit Berita</h3>
                </div>
                <form action="{{ url('admin/blog', $blog->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Penulis</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama_penulis" value="{{ $blog->nama_penulis }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Judul</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="judul" value="{{ $blog->judul }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Gambar</label>
                            <div class="col-sm-9">
                                <img src="{{ url("public/$blog->gambar") }}" class="img-fluid mb-2" style="max-width: 50%; border-radius: 5px;">
                                <input type="file" class="form-control" name="gambar" accept=".jpg, .png, .jpeg">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Isi Berita</label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" name="isi" style="height: 300px">{{ $blog->isi }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-right">
                            <a href="{{ url('admin/blog') }}" class="btn btn-secondary"> Kembali</a>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
