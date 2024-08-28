<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3 footer-item">
        <h4>BKPSDM Kab. Ketapang</h4>
        <p>Sistem Informasi Pelayanan Elektronik BKPSDM Kab. Ketapang</p>
        <ul class="social-icons">
          <li><a rel="nofollow" href="https://www.facebook.com/profile.php?id=100080286533003" target="_blank" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://youtube.com/@bkpsdmketapang8808" target="_blank"><i class="fa fa-youtube"></i></a></li>
          <li><a href="https://instagram.com/bkpsdmketapang" target="_blank"><i class="fa fa-instagram"></i></a></li>
          <li><a href="https://wa.me/081522545955" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
          <li><a href="https://www.tiktok.com/@bkpsdmketapang" target="_blank"><i class="bi bi-tiktok"></i></a></li>
        </ul>
      </div>
      <div class="col-md-3 footer-item">
        <h4>Fatner</h4>

        <ul class="menu-list">
          @foreach ($list_mitra as $mitra)
          <li><a href="{{ $mitra->kota_mitra }}">{{ $mitra->nama }}</a></li>
          <!-- <li><a href="#">Berkah Konveksi</a></li>
              <li><a href="#">Rumah Konveksi Kalbar </a></li> -->
          <!-- <li><a href="#">Cursus augue hasellus</a></li>
              <li><a href="#">Lacinia ac sapien</a></li> -->
          @endforeach
        </ul>

        <ul class="social-icons">
          @foreach ($list_mitra as $mitra)
          <li><a href="{{ $mitra->kota_mitra }}" target="_blank"><img src="{{ url("public/$mitra->logo") }}" style="height: 35px;"></a></li>
          <!-- <li><a href="#" target="_blank"><img src="{{ url('public/template') }}/assets/images/fatner2.png" style="height: 35px;"></a></li>
              <li><a href="#" target="_blank"><img src="{{ url('public/template') }}/assets/images/fatner1.png" style="height: 35px;"></a></li> -->
          @endforeach
        </ul>



      </div>
      <div class="col-md-3 footer-item">
        <h4>Fitur</h4>
        <ul class="menu-list">
          <li><a href="{{ url ('/') }}">Beranda</a></li>
          <li><a href="{{ url ('profil') }}">Profil</a></li>
          <li><a href="{{ url ('berita') }}">Berita</a></li>
        </ul>
      </div>
      <!-- <div class="col-md-3 footer-item last-item">
            <h4>Hubungi Kami</h4>
            <div class="contact-form">
              <form id="contact footer-contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]@[^ @]" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div> -->
      <div class="col-md-3 footer-item last-item">
        <h4 style="text-align: justify;">Alamat</h4>
        <p>Jl. Dr. Sutomo No. 65 Kecamatan Delta Pawan Kabupaten Ketapang</p>
        <ul class="social-icons">
          <li><a href="https://www.google.co.id/maps/@-1.8521048,109.9735385,3a,75y,156.94h,96.28t/data=!3m6!1e1!3m4!1sabKkxvugSBEy2amLcdKzdA!2e0!7i16384!8i8192?coh=205409&entry=ttu" target="_blank"><i class="fa fa-map-marker"></i></a></li>
        </ul>
      </div>

    </div>
  </div>
</footer>

<div class="sub-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p>
          Copyright &copy; 2023 @if(date("Y") > '2023') - {{date("Y")}} @endif BKPSDM KAB. KETAPANG - Depelopment By <strong><a href="https://instagram.com/ifanrifaldi47" target="_blank">Ifan Rifaldi </strong></a>
        </p>
      </div>
    </div>
  </div>
</div>