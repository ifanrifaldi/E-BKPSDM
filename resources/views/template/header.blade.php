@php
    function checkRouteActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
@endphp
<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <ul class="left-info">
                    <li><a href="#"><i class="fa fa-envelope"></i>bkpsdm@ketapangkab.go.id
                        </a></li>
                    <li><a href="tel:081522545955"><i class="fa fa-phone"></i>0815-2254-5955
                        </a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="right-icons">
                    <li><a href="https://www.facebook.com/profile.php?id=100080286533003"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://youtube.com/@bkpsdmketapang8808"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="https://instagram.com/bkpsdmketapang"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://wa.me/081522545955"><i class="fa fa-whatsapp"></i></a></li>
                    <li><a href="https://www.tiktok.com/@bkpsdmketapang" target="_blank"><i class="bi bi-tiktok"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="{{ url('public/template') }}/assets/images/bkpsdm3.png"
                    alt="logo-small" class="logo-sm" style="height: 45px; margin-right:2%;"></a>
            <!-- <div class="brand">
    <a href="crm-index.html" class="logo">
            <span>
                <img src="{{ url('public/template') }}/assets/images/ktp.jpg" alt="logo-small" class="logo-sm" style="height: 45px; margin-right:2%;" >
            </span>
        </a>
    </div> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link {{ checkRouteActive('/') }}" href="{{ url('/') }}">Beranda
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('blog') || request()->is('blog-detail/*') ? 'active' : '' }}"
                            href="{{ url('blog') }}">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ checkRouteActive('profil') }} {{ checkRouteActive('blog-detail') }}"
                            href="{{ url('profil') }}">Profil</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link {{ checkRouteActive('visimisi') }} {{ checkRouteActive('team') }} "
                            data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                            aria-expanded="false">Profil</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('visimisi') }}">Visi Misi</a>
                            <a class="dropdown-item" href="{{ url('team') }}">Team</a>
                          
                        </div>
                    </li> -->
                    {{-- <li class="nav-item">
                        <a class="nav-link {{ checkRouteActive('blog') }} {{ checkRouteActive('blogdetail') }}"
                            href="{{ url('blog') }}">Blog</a>
                    </li> --}}

                    <!-- @yield('menu')
                    <li class="nav-item">
                        <a class="nav-link {{ checkRouteActive('galery') }}" href="{{ url('galery') }}">Galery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ checkRouteActive('caraorder') }} " href="{{ url('caraorder') }}">Cara
                            Order</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link {{ checkRouteActive('loginpegawai') }} " href="{{ url('login') }}">Login</a>
                    </li>
                    <!-- <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li> -->
                </ul>
            </div>
        </div>
    </nav>
</header>
