@extends('template.admin')
@section('content')
<div class="container-fluid">
    <h5 class="mb-2">Data Pengajuan Mutasi Dan Pensiun</h5>
    <div class="row">
        <div class="col-md-2 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-success"><i class="far fa-envelope"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Instansi</span>
                    <span class="info-box-number">{{ $instansiCount }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-2 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-success"><i class="far fa-envelope"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Sekolah</span>
                    <span class="info-box-number">{{ $sekolahCount }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-2 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-success"><i class="far fa-envelope"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Masuk</span>
                    <span class="info-box-number">{{ $masukCount }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-2 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-success"><i class="far fa-envelope"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Keluar</span>
                    <span class="info-box-number">{{ $keluarCount }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-2 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-warning"><i class="far fa-envelope"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Dizur</span>
                    <span class="info-box-number">{{ $dizurCount }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-2 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-warning"><i class="far fa-envelope"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Bujaduya</span>
                    <span class="info-box-number">{{ $bujaduyaCount }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
</div>
<!-- /.row -->
@endsection