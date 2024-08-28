@extends('template.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Partner</h3>
                    </div>
                    <form action="{{ url('admin/mitra') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Partner</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" placeholder="Nama Partner" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Link Medsos</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kota_mitra" placeholder="Link Medsos">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Logo Partner</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="logo" accept=".jpg, .png, .jpeg">
                                </div>
                            </div>

                          
                        </div>
                        <div class="card-footer">
                            <div class="offset-sm-2 col-sm-10">
                                <a href="{{ url('admin/mitra') }}" class="btn btn-info">Kembali</a>
                            <button class="btn btn-primary float-right">Simpan</button>
                            
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
