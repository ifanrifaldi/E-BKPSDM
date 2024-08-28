@extends('template.admin')
@section('content')
    <div class="container-fluid">
        <div class="card card-solid">
            <div class="card-body">
                <div class="header">
                    <a href="{{ url('admin/profil') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>
                        Kembali</a>
                        <br><br>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6">
                        
                        <div class="col-12">
                            <img src="{{ url("public/$profil->struktur_organisasi") }}" class="product-image">
                        </div>

                    </div>
                    <div class="col-12 col-sm-6">
                        <h3 class="my-3">Profil Konveksi : {!! nl2br($profil->profil_konveksi) !!}</h3>
                        <h5 for="">
                            Visi Konveksi : 
                            {!! nl2br( $profil->visi)!!}
                        </h5>
                        <hr>

                        <h5 for="">
                            Misi Konveksi : {!! nl2br( $profil->misi)!!}
                        </h5>
                        <hr>

                        <h5 for="">
                            Motto Konveksi : {!! nl2br( $profil->moto)!!}
                        </h5>
                        <hr>

                        <h5 for="">
                            Tujuan Konveksi : {!! nl2br( $profil->tujuan)!!}
                        </h5>
                        <hr>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
