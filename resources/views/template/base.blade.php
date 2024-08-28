<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url ('public/template') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="shortcut icon" href="{{url('public/template')}}/assets/images/bkpsdm.png" type="image/x-icon" />
    <link rel="stylesheet" href="{{url ('public/template') }}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{url ('public/template') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{url ('public/template') }}/assets/css/owl.css">
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <!-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>   -->
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    @include('template.header')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    @yield('content')

    <!-- Footer Starts Here -->
    @include('template.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="{{url ('public/template') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{url ('public/template') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="{{url ('public/template') }}/assets/js/custom.js"></script>
    <script src="{{url ('public/template') }}/assets/js/owl.js"></script>
    <script src="{{url ('public/template') }}/assets/js/slick.js"></script>
    <script src="{{url ('public/template') }}/assets/js/accordions.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if(session('success'))
            Swal.fire("Success!", "{{ session('success') }}", "success");
            @elseif(session('warning'))
            Swal.fire("Warning!", "{{ session('warning') }}", "warning");
            @elseif(session('danger'))
            Swal.fire("Error!", "{{ session('danger') }}", "error");
            @endif
        });
    </script>
    
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
</html>