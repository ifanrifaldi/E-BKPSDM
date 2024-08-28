@extends('template.base')
@section('title', 'Visi Misi')
@section('content')

@include('layout.menu.menu')
<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>VISI MISI</h1>
        <span>KONVEKSI PONTIANAK</span>
      </div>
    </div>
  </div>
</div>

<div class="testimonials" style="margin: 0">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="owl-testimonials owl-carousel">

          <div class="testimonial-item">
            <div class="inner-content">
              <h4>VISI</h4>
              <span>Perumda KPM</span>
              <p >"Menjadi Perumda yang Profesional,
                Berkembang dan Maju <br><br><br>"</p>
            </div>
            <img src="{{url('public/template')}}/assets/images/kpmori.png" alt="">
          </div>

          <div class="testimonial-item">
            <div class="inner-content">
              <h4>MISI</h4>
              <span>Perumda KPM</span>
              <p style="text-align: justify;">"Membangun Organisasi dengan Jaringan dengan Mitra Kerja yang Bermutu
                Mengembangkan Unit Bisnis yang Menghasilkan Keuntungan
                Mengembangkan unit usaha dan jasa yang memberikan manfaat bagi Masyarakat"</p>
            </div>
            <img src="{{url('public/template')}}/assets/images/kpmori.png" alt="">
          </div>

          

        </div>
      </div>
    </div>
  </div>
</div>
@endsection