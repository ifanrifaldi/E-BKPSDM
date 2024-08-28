@extends('template.base')
@section('title', 'Profil')
@section('content')

@include('layout.menu.menu')
<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>PROFIL</h1>
                <span>BKPSDM KAB. KETAPANG</span>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="row">
    <div class="col-md-12">
        @foreach ($list_profil as $profil)
        <section class='tabs-content'>
            <img src=" {{ url("public/app/profil/profil/$profil->profil") }}" alt="" style="height: max-content;">
        </section>
        @endforeach
    </div>
</div>
<br>
<br>
<div class="request-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Tentang BKPSDM</h4>
                <span style="text-align: justify;">
                    <h7><b>Badan Kepegawaian dan Pengembangan Sumber Daya Manusia (BKPSDM) </b>Kabupaten Ketapang sebagaimana diatur dalam Peraturan Bupati Ketapang Nomor 100 Tahun 2021 tentang Kedudukan, Susunan Organisasi, Tugas Dan Fungsi, Serta Tata Kerja Badan Kepegawaian dan Pengembangan Sumber Daya Manusia adalah melaksanakan urusan pemerintahan daerah di bidang kepegawaian, pendidikan dan pelatihan yang menjadi kewenangan daerah, yang terbagi dan terinci secara sistematis ke dalam tugas sekretariat dan masing-masing bidang, dan jabatan fungsional.
                    </h7>
                </span>
                <!-- <div class="contact-information" style="margin-top: 25px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="contact-item">
                                    <i class="fa fa-globe"></i>
                                    <h6 style="color: black;">Digitalisasi</h6>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="contact-item">
                                    <i class="fa fa-thumbs-up"></i>
                                    <h6 style="color: black;">Skill</h6>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="contact-item">
                                    <i class="fa fa-home"></i>
                                    <h6 style="color: black;">Produktifitas</h6>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="contact-item">
                                    <i class="fa fa-users"></i>
                                    <h6 style="color: black;">Kreatifitas</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br> -->
                <!-- <div style="text-align: center;">
                    <span>
                        <h5><b style="color: rgb(22, 95, 20);">"Konveksi Pontianak Bermoto</b> Be empowered and useful"
                        </h5>
                    </span>
                </div> -->
            </div>
        </div>
    </div>
</div>
<br>
<!-- <div class="container">
    <div class="more-info-content">
        <div class="right-content">
            <h5 style="color: rgb(164, 198, 57);"><i class="fa fa-certificate"></i> VISI</h5>
            <br>
            <h6>"Melanjutkan Ketapang Maju Menuju Masyrakat Sejahtera"</h6>
            <br>
            <h5 style="color: rgb(164, 198, 57);"><i class="fa fa-certificate"></i> MISI</h5>
            <br>
            <h6>>Mewujudkan Pemerintahan yang Handal, Bersih, Terpecaya dan Berwibawa Dalam Pelayanan Publik</>
                <h6>>Melanjutkan Peningkatan Pembangunan Infrastruktur</h6>
                <h6>>Pembangunan Sumberdaya Manusia yang Memiliki Daya Saing</h6>
                <h6>>Meningkatkan Pemberdayaan Masyarakat dan Pemerintahan Desa yang Merata dan Berkeadilan</h6>
                <h6>>Memperkokoh Landasan Perekonomian Masyarakat</h6>
                <h6>>Pengelolaan dan Pemanfaatan Sumber Daya Alam Untuk Kesejahteraan Seluruh Masyarakat Ketapang</h6>
        </div>
    </div>
</div> -->
<br>
<br>
<!-- <div class="fun-facts">
    <div class="container">
        <div class="more-info-content">
            <div class="row">
                @foreach($list_berita as $berita)
                <div class="col-md-12">
                    <span class="text-center" style="font-size: 125%;">blog Artikel</span>
                    <h2 class="text-center"><em>{{$berita->judul}}</em></h2>
                    <div class="left-image">
                        <img src="{{ url("p ublic/$berita->gambar") }}" style="object-fit: cover; position: static; width: 100%; height: 400px;">
                        <br>
                        <br>
                        <span class="float-right"><i class="fa fa-calendar"></i>
                            {{ $berita->created_at->diffForHumans() }}</span>
                        <br>
                        <br>
                        <a href="{{ url("blog-detail/$berita->id") }}" class="filled-button">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div> -->

@endsection