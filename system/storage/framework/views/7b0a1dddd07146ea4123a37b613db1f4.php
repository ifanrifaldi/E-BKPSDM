<?php
function checkRouteActive($route){
if(Route::current()->uri == $route) return 'active';
}
?>
<div class="sub-header">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-xs-12">
        <ul class="left-info">
          <li><a href="#"><i class="fa fa-envelope"></i>konvekasipontianak@gmail.com
            </a></li>
          <li><a href="#"><i class="fa fa-phone"></i>1222000662218
            </a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul class="right-icons">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<header class="">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="index.html"><img src="<?php echo e(url('public/template')); ?>/assets/images/kpk.png" alt="logo-small" class="logo-sm" style="height: 45px; margin-right:2%;"></a>
      <!-- <div class="brand">
    <a href="crm-index.html" class="logo">
            <span>
                <img src="<?php echo e(url('public/template')); ?>/assets/images/ktp.jpg" alt="logo-small" class="logo-sm" style="height: 45px; margin-right:2%;" >
            </span>
        </a>
    </div> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link <?php echo e(checkRouteActive('/')); ?>" href="<?php echo e(url ('/')); ?>">Beranda
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(checkRouteActive('blog')); ?> <?php echo e(checkRouteActive('blogdetail')); ?>" href="<?php echo e(url ('blog')); ?>">Blog</a>
          </li>
          <li class="nav-item dropdown">
            <a class="dropdown-toggle nav-link <?php echo e(checkRouteActive('visimisi')); ?> <?php echo e(checkRouteActive('team')); ?> " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profil</a>

            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo e(url ('visimisi')); ?>">Visi Misi</a>
              <a class="dropdown-item" href="<?php echo e(url ('team')); ?>">Team</a>
              <!-- <a class="dropdown-item" href="about.html">Cara Order</a>
              <a class="dropdown-item" href="blog.html">Hasil Produksi</a> -->
              <!-- <a class="dropdown-item" href="testimonials.html">Testimonials</a>
              <a class="dropdown-item" href="faq.html">FAQ</a>
              <a class="dropdown-item" href="terms.html">Terms</a> -->
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="dropdown-toggle nav-link <?php echo e(checkRouteActive('kemeja')); ?>  <?php echo e(checkRouteActive('kaos')); ?>  <?php echo e(checkRouteActive('jaket')); ?>" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Produk</a>

            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo e(url ('kemeja')); ?>">Kemeja</a>
              <a class="dropdown-item" href="<?php echo e(url ('kaos')); ?>">Kaos</a>
              <a class="dropdown-item" href="<?php echo e(url ('jaket')); ?>">Jaket</a>
              <a class="dropdown-item" href="<?php echo e(url ('caraorder')); ?>">Cara Order</a>
              <a class="dropdown-item" href="<?php echo e(url ('xxxx')); ?>">Galery</a>
              <!-- <a class="dropdown-item" href="testimonials.html">Testimonials</a>
              <a class="dropdown-item" href="faq.html">FAQ</a>
              <a class="dropdown-item" href="terms.html">Terms</a> -->
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>
</header><?php /**PATH C:\laragon\www\konveksipontianak\system\resources\views/template/header.blade.php ENDPATH**/ ?>