@extends('template.pegawai')
@section('content') 
<div class="container-fluid">
    <h5 class="mb-4 text-black">Prosedur Pengajuan Mutasi</h5>
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="small-box bg-success shadow-sm">
                <div class="inner text-white">
                    <h4>Prosedur</h4>
                    <p>Pengajuan Mutasi Instansi</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-archive"></i>
                </div>
                <a href="{{ url('public/app/prosedur_pengajuan/instansi/' . $prosedurpengajuan->instansi) }}" class="small-box-footer" target="_blank">Klik Disini <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="small-box bg-success shadow-sm">
                <div class="inner text-white">
                    <h4>Prosedur</h4>
                    <p>Pengajuan Mutasi Sekolah</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-archive"></i>
                </div>
                <a href="{{ url('public/app/prosedur_pengajuan/sekolah/' . $prosedurpengajuan->sekolah) }}" class="small-box-footer" target="_blank">Klik Disini <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="small-box bg-success shadow-sm">
                <div class="inner text-white">
                    <h4>Prosedur</h4>
                    <p>Mutasi Masuk Ketapang</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-archive"></i>
                </div>
                <a href="{{ url('public/app/prosedur_pengajuan/masuk/' . $prosedurpengajuan->masuk) }}" class="small-box-footer">Klik Disini <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="small-box bg-success shadow-sm">
                <div class="inner text-white">
                    <h4>Prosedur</h4>
                    <p>Mutasi Keluar Ketapang</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-archive"></i>
                </div>
                <a href="{{ url('public/app/prosedur_pengajuan/keluar/' . $prosedurpengajuan->keluar) }}" class="small-box-footer">Klik Disini <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <h5 class="mb-4 text-black">Prosedur Pengajuan Pensiun</h5>
    <div class="row">
        <div class="col-lg-6 col-md-12 mb-4">
            <div class="small-box bg-secondary shadow-sm">
                <div class="inner text-white">
                    <h4>Prosedur</h4>
                    <p>Pensiun Dini & Uzur</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-archive"></i>
                </div>
                <a href="{{ url('public/app/prosedur_pengajuan/dizur/' . $prosedurpengajuan->dizur) }}" class="small-box-footer">Klik Disini <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 mb-4">
            <div class="small-box bg-secondary shadow-sm">
                <div class="inner text-white">
                    <h4>Prosedur</h4>
                    <p>Pensiun BUP, Janda/Duda/Yatim (Bujaduya)</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-archive"></i>
                </div>
                <a href="{{ url('public/app/prosedur_pengajuan/bujaduya/' . $prosedurpengajuan->bujaduya) }}" class="small-box-footer">Klik Disini <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection
