@extends('template.base')
@section('title', 'Team')
@section('content')

@include('layout.menu.menu')
<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>TEAM</h1>
        <span>KONVEKSI PONTIANAK</span>
      </div>
    </div>
  </div>
</div>

<div class="team" style="margin: 0">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>STRUKTUR<em> PERUSAHAAN</em></h2>
          <span>KONVEKSI PONTIANAK</span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-item">
          <img src="{{ url ('public/template')}}/assets/images/team-image-1-646x680.jpg" alt="">
          <div class="down-content">
            <h4>MARTIN RANTAN,SH,M.Sos
            </h4>
            <span>BUPATI SEBAGAI KPM
            </span>
            <!-- <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>

            <p>
              <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
            </p> -->
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-item">
          <img src="{{ url ('public/template')}}/assets/images/team-image-2-646x680.jpg" alt="">
          <div class="down-content">
            <h4>ALKAP PASTI,S.Pd
            </h4>
            <span>DIREKTUR UTAMA
            </span>
            <!-- <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
            <p>
              <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
            </p> -->
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-item">
          <img src="{{ url ('public/template')}}/assets/images/team-image-3-646x680.jpg" alt="">
          <div class="down-content">
            <h4>DRS.H. MAHYUDIN M. Si
            </h4>
            <span>KETUA DEWAN PENGAWAS
            </span>
            <!-- <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
            <p>
              <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
            </p> -->
          </div>
        </div>
      </div>
      <div class="col-md-4">git 
        <div class="team-item">
          <img src="{{ url ('public/template')}}/assets/images/team-image-1-646x680.jpg" alt="">
          <div class="down-content">
            <h4>H.MUHAMMAD THAMRIN, SH
            </h4>
            <span>ANGGOTA DEWAN PENGAWAS
            </span>
            <!-- <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>

            <p>
              <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
            </p> -->
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-item">
          <img src="{{ url ('public/template')}}/assets/images/team-image-2-646x680.jpg" alt="">
          <div class="down-content">
            <h4>TRIAN ADIMARTA, STP, M.Sc
            </h4>
            <span>ANGGOTA DEWAN PENGAWAS
            </span>
            <!-- <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
            <p>
              <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
            </p> -->
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-item">
          <img src="{{ url ('public/template')}}/assets/images/team-image-3-646x680.jpg" alt="">
          <div class="down-content">
            <h4>IR. SAPRAN DARIUS
            </h4>
            <span>DIREKTUR OPERASIONAL/TEKNIK
            </span>
            <!-- <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
            <p>
              <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
            </p> -->
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-item">
          <img src="{{ url ('public/template')}}/assets/images/team-image-1-646x680.jpg" alt="">
          <div class="down-content">
            <h4>M. EFFENDI, SE
            </h4>
            <span>DIREKTUR ADMINISTRASI/
              KEUANGAN
            </span>
            <!-- <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>

            <p>
              <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
            </p> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection