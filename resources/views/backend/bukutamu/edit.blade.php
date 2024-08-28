@extends('template.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="header">
                        <a href="{{ url('admin/profil') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>
                            Kembali</a>
                            <br><br>
                    </div>
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Profil</h3>
                    </div>
                    <form action="{{ url('admin/profil', $profil->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Profil Konveksi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control summernote" name="profil_konveksi">{{ $profil->profil_konveksi }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Visi Konveksi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control summernote" name="visi">{{ $profil->visi }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Misi Konveksi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control summernote" name="misi">{{ $profil->misi }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Motto Konveksi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control summernote" name="moto">{{ $profil->moto }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tujuan Konveksi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control summernote" name="tujuan">{{ $profil->tujuan }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Struktur Organisasi</label>
                                <div class="col-md-6">
                                    <img src="{{ url("public/$profil->struktur_organisasi") }}" class="img-responsive"
                                        style="width:70% ; object-fit: cover">
                                </div>
                                <div class="col-sm-4">
                                    <input type="file" class="form-control" name="struktur_organisasi"
                                        accept=".jpg, .png, .jpeg" value="{{ $profil->struktur_organisasi }}">
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="offset-sm-2 col-sm-10">
                                <button class="btn btn-info float-right"><span class="fa fa-save"></span> Simpan</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
