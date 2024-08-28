@extends('template.base')
@section('title', 'Beranda')
@section('content')

@include('layout.menu.menu')
<div class="main-banner header-text" id="top">
    <div class="Modern-Slider">
        <!-- Item -->
        <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                    <h6>Selamat Datang Di Website Kami</h6>
                    <h4>BKPSDM KABUPATEN<br>KETAPANG</h4>
                    <p>
                        Badan Kepegawaian Dan Pengembangan Sumber Daya Manusia
                    </p>
                    <a href="https://wa.me/089512581105" class="filled-button">Informasi layananan</a>
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                    <h6>Selamat Datang Di Website Kami</h6>
                    <h4>BKPSDM KABUPATEN<br>KETAPANG</h4>
                    <p>
                        Badan Kepegawaian Dan Pengembangan Sumber Daya Manusia
                    </p>
                    <a href="https://wa.me/089512581105" class="filled-button">Informasi layananan</a>
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                    <h6>Selamat Datang Di Website Kami</h6>
                    <h4>BKPSDM KABUPATEN<br>KETAPANG</h4>
                    <p>
                        Badan Kepegawaian Dan Pengembangan Sumber Daya Manusia
                    </p>
                    <a href="https://wa.me/089512581105" class="filled-button">Informasi layananan</a>
                </div>
            </div>
        </div>
        <!-- // Item -->
    </div>
</div>
<!-- Banner Ends Here -->

<div class="request-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 >Visi</h4 >
                <span style="text-align: justify;">
                    <h6 ><i class=""></i> "Melanjutkan Ketapang Maju Menuju Masyrakat Sejahtera"</h6>
                    <!-- <h6><i class="fa fa-certificate"></i> Harga Terjangkau</h6>
                    <h6><i class="fa fa-certificate"></i> Tim Profesional</h6>
                    <h6><i class="fa fa-certificate"></i> Quality Control</h6>
                    <h6><i class="fa fa-certificate"></i> Cepat Dan Ontime</h6>
                    <h6><i class="fa fa-certificate"></i> Pelayanan Ramah</h6> -->
                </span>
            </div>
            <br>
            <br>
            <br>
            <div class="col-md-12">
            <h4 >Misi</h4>
                <span style="text-align: justify;" >
                    <h6><i class="fa fa-certificate"></i> Mewujudkan Pemerintahan yang Handal, Bersih, Terpecaya dan Berwibawa Dalam Pelayanan Publik</h6>
                    <h6><i class="fa fa-certificate"></i> Mewujudkan Pemerintahan yang Handal, Bersih, Terpecaya dan Berwibawa Dalam Pelayanan Publik</h6>
                    <h6><i class="fa fa-certificate"></i> Melanjutkan Peningkatan Pembangunan Infrastruktur</h6>
                    <h6><i class="fa fa-certificate"></i> Pembangunan Sumberdaya Manusia yang Memiliki Daya Saing</h6>
                    <h6><i class="fa fa-certificate"></i> Meningkatkan Pemberdayaan Masyarakat dan Pemerintahan Desa yang Merata dan Berkeadilan</h6>
                    <h6><i class="fa fa-certificate"></i> Memperkokoh Landasan Perekonomian Masyarakat</h6>
                    <h6><i class="fa fa-certificate"></i> Pengelolaan dan Pemanfaatan Sumber Daya Alam Untuk Kesejahteraan Seluruh Masyarakat Ketapang
                    </h6>
                </span>
            </div>
        </div>
    </div>
</div>



<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Berita<em> Terbaru</em></h2>
                    <!-- <span>KEMEJA SAFETY, KEMEJA WEARPACK, JAKET (BOMBER/PARKA), KAOS (OBLONG / POLO), (PDH / PDL).</span> -->
                </div>
            </div>

            @foreach($list_berita as $berita)
            <div class="col-md-4">
                <div class="service-item">
                    <img src="{{ url("public/$berita->gambar") }}" style="object-fit: cover; position: static; width: 100%; height: 400px;">
                    <div class="down-content">
                        <h4>{{ $berita->judul }}</h4>
                        <a href="{{url('berita')}}" class="filled-button">Baca Selengkapnya</a>
                    </div>
                </div>
                <br>
            </div>

            @endforeach
        </div>
    </div>
    <br><br>

    <!-- <div class="fun-facts">
        <div class="container">
            <div class="more-info-content">
                <div class="row">
                    @foreach($list_berita as $berita)
                    <div class="col-md-12">
                        <span class="text-center" style="font-size: 125%;">blog Artikel</span>
                        <h2 class="text-center"><em>{{$berita->judul}}</em></h2>
                        <div class="left-image">
                            <img src="{{ url("public/$berita->gambar") }}" style="object-fit: cover; position: static; width: 100%; height: 400px;">
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
    <!-- 
<div class="more-info">
    <div class="container">
        <div class="section-heading">
            <h2>Read our <em>Blog</em></h2>
            <span>Aliquam id urna imperdiet libero mollis hendrerit</span>
        </div>

        <div class="row" id="tabs">
            <div class="col-md-4">
                <ul>
                    <li><a href='#tabs-1'>Lorem ipsum dolor sit amet, consectetur adipisicing <br> <small>John Doe &nbsp;|&nbsp; 27.07.2020 10:10</small></a></li>
                    <li><a href='#tabs-2'>Mauris lobortis quam id dictum dignissim <br> <small>John Doe &nbsp;|&nbsp; 27.07.2020 10:10</small></a></li>
                    <li><a href='#tabs-3'>Class aptent taciti sociosqu ad litora torquent per <br> <small>John Doe &nbsp;|&nbsp; 27.07.2020 10:10</small></a></li>
                </ul>

                <br>

                <div class="text-center">
                    <a href="blog.html" class="filled-button">Read More</a>
                </div>

                <br>
            </div>

            <div class="col-md-8">
                <section class='tabs-content'>
                    <article id='tabs-1'>
                        <img src="{{url ('public/template') }}/assets/images/blog-image-1-940x460.jpg" alt="">
                        <h4><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></h4>
                        <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante, quis posuere nibh vestibulum sit amet.</p>
                    </article>
                    <article id='tabs-2'>
                        <img src="{{url ('public/template') }}/assets/images/blog-image-2-940x460.jpg" alt="">
                        <h4><a href="blog-details.html">Mauris lobortis quam id dictum dignissim</a></h4>
                        <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante, quis posuere nibh vestibulum sit amet</p>
                    </article>
                    <article id='tabs-3'>
                        <img src="{{url ('public/template') }}/assets/images/blog-image-3-940x460.jpg" alt="">
                        <h4><a href="blog-details.html">Class aptent taciti sociosqu ad litora torquent per</a></h4>
                        <p>Mauris lobortis quam id dictum dignissim. Donec pellentesque erat dolor, cursus dapibus turpis hendrerit quis. Suspendisse at suscipit arcu. Nulla sed erat lectus. Nulla facilisi. In sit amet neque sapien. Donec scelerisque mi at gravida efficitur. Nunc lacinia a est eu malesuada. Curabitur eleifend elit sapien, sed pulvinar orci luctus eget.
                        </p>
                    </article>
                </section>
            </div>
        </div>


    </div>
</div> -->

    <!-- <div class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>What they say <em>about us</em></h2>
                    <span>testimonials from our greatest clients</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-testimonials owl-carousel">

                    <div class="testimonial-item">
                        <div class="inner-content">
                            <h4>George Walker</h4>
                            <span>Chief Financial Analyst</span>
                            <p>"Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem sit amet quam. Pellentesque in sagittis lacus."</p>
                        </div>
                        <img src="http://placehold.it/60x60" alt="">
                    </div>

                    <div class="testimonial-item">
                        <div class="inner-content">
                            <h4>John Smith</h4>
                            <span>Market Specialist</span>
                            <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi."</p>
                        </div>
                        <img src="http://placehold.it/60x60" alt="">
                    </div>

                    <div class="testimonial-item">
                        <div class="inner-content">
                            <h4>David Wood</h4>
                            <span>Chief Accountant</span>
                            <p>"Ut ultricies maximus turpis, in sollicitudin ligula posuere vel. Donec finibus maximus neque, vitae egestas quam imperdiet nec. Proin nec mauris eu tortor consectetur tristique."</p>
                        </div>
                        <img src="http://placehold.it/60x60" alt="">
                    </div>

                    <div class="testimonial-item">
                        <div class="inner-content">
                            <h4>Andrew Boom</h4>
                            <span>Marketing Head</span>
                            <p>"Curabitur sollicitudin, tortor at suscipit volutpat, nisi arcu aliquet dui, vitae semper sem turpis quis libero. Quisque vulputate lacinia nisl ac lobortis."</p>
                        </div>
                        <img src="http://placehold.it/60x60" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> -->

    <!-- <div class="callback-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Request a <em>call back</em></h2>
                    <span>Etiam suscipit ante a odio consequat</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="contact-form">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="border-button">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
    </div>
</div> -->
    @endsection