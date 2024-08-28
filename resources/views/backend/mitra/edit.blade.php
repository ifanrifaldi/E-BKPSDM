@extends('template.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="header">
                        <a href="{{ url('admin/mitra') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>
                            Kembali</a>
                            <br><br>
                    </div>
                    
                    <div class="card-header">
                        <h3 class="title text-center">Edit Mitra</h3>
                    </div>
                    <form action="{{ url('admin/mitra', $mitra->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Mitra</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama"
                                        value="{{ $mitra->nama }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kota Mitra</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kota_mitra" value="{{ $mitra->kota_mitra }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Logo</label>
                                <div class="col-md-5">
                                    <img src="{{ url("public/$mitra->logo") }}" class="img-responsive"
                                        style="width:70% ; object-fit: cover">
                                </div>
                                <div class="col-sm-5">
                                    <input type="file" class="form-control" name="logo" accept=".jpg, .png, .jpeg"
                                        value="{{ $mitra->logo }}">
                                </div>
                            </div>


                        </div>
                        <div class="card-footer">
                            <div class="offset-sm-2 col-sm-10">
                                <button class="btn btn-primary float-right"><span class="fa fa-save"></span> Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
