<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(url ('public/template')); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="shortcut icon" href="<?php echo e(url('public/template')); ?>/assets/images/kpk.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo e(url ('public/template')); ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo e(url ('public/template')); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo e(url ('public/template')); ?>/assets/css/owl.css">
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <?php echo $__env->make('template.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <?php echo $__env->yieldContent('content'); ?>

    <!-- Footer Starts Here -->
    <?php echo $__env->make('template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo e(url ('public/template')); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo e(url ('public/template')); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="<?php echo e(url ('public/template')); ?>/assets/js/custom.js"></script>
    <script src="<?php echo e(url ('public/template')); ?>/assets/js/owl.js"></script>
    <script src="<?php echo e(url ('public/template')); ?>/assets/js/slick.js"></script>
    <script src="<?php echo e(url ('public/template')); ?>/assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html><?php /**PATH C:\laragon\www\kpk\system\resources\views/template/base.blade.php ENDPATH**/ ?>