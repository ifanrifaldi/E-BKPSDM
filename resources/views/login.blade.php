<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-BKPSDM | Log in </title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('public/admin/bg.jpg');
            /* Ganti 'path/to/your/background/image.jpg' dengan lokasi file gambar latar belakang Anda */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        /* Tambahkan gaya lainnya sesuai kebutuhan */
    </style>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="{{ url('public/admin') }}/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">

        <div class="card card-outline card-success">
            <div class="card-header text-center">
                <a href="{{ url('/') }}">
                    <img src="{{ url('public/admin') }}/bkpsdm3.png" alt="Admin Logo" class="h1" style="width: 80%">
                </a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Login Admin</p>

                <form action="{{ url('loginadmin') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username" required pattern="^[a-z0-9_]+$" title="Username hanya boleh mengandung huruf kecil, angka, dan underscore (_)" oninput="this.value = this.value.replace(/[^a-z0-9_]/g, '')">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">

                            </div>
                        </div>

                        <div class="col-4">
                            <button class="btn btn-success btn-block"> Sign In </button>
                        </div>

                    </div>
                </form>


            </div>

        </div>

    </div>
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
    <script src="{{ url('public/admin') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public/admin') }}/dist/js/adminlte.min.js"></script>
</body>

</html>