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
                        
                        <h3 class="card-title">Tambah Data Profil</h3>
                    </div>
                    <form action="{{ url('admin/profil') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Profil</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control summernote" name="profil_konveksi"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Visi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control summernote" name="visi"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Misi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control summernote" name="misi"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Motto</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control summernote" name="moto"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tujuan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control summernote" name="tujuan"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Struktur Organisasi</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="struktur_organisasi"
                                        accept=".jpg, .png, .jpeg">
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
