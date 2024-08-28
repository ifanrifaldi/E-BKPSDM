<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-BKPSDM | Register</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('public/admin') }}/dist/css/adminlte.min.css">
    <style>
        body {
            background-image: url('public/admin/bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .card {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            /* Menambahkan bayangan */
        }
    </style>
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ url('loginpegawai') }}">
                <img src="{{ url('public/admin') }}/bkpsdm3.png" alt="Admin Logo" class="h1" style="width: 80%">
            </a>
        </div>

        <div class="card card-outline card-success">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Silahkan Registrasi Untuk Membuat Akun</p>

                <form action="{{ url('register') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="NIP" name="nip" required pattern="\d{18}" maxlength="18" title="NIP harus terdiri dari 18 digit angka dan tidak boleh berisi huruf atau tanda baca." oninput="this.value = this.value.replace(/\D/g, '')">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-id-card"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <select class="form-control" name="jenis_kelamin" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-venus-mars"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="No. Telp" name="no_hp" required pattern="08\d{0,11}" maxlength="13" title="No. Telp harus terdiri dari maksimal 13 digit angka dan dimulai dengan '08'." oninput="if (!this.value.startsWith('08')) this.value = '08'; this.value = this.value.replace(/\D/g, '').substring(0, 13)">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Masukkan alamat email yang valid dalam huruf kecil. Hanya huruf kecil, angka, tanda @, dan titik yang diperbolehkan." oninput="this.value = this.value.toLowerCase().replace(/[^a-z0-9.@]/g, '')">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="file" class="form-control" placeholder="Foto" name="foto" accept=".jpg, .png, .jpeg" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-image"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control"  placeholder="Password" name="password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-success btn-block" onclick="confirmSubmit()">Register</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="{{ url('public/admin') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('public/admin') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('public/admin') }}/dist/js/adminlte.min.js"></script>

    <script>
        // Fungsi untuk menampilkan alert konfirmasi sebelum submit
        function confirmSubmit() {
            if (confirm("Apakah Anda yakin untuk menyimpan data?")) {
                document.getElementById("registrationForm").submit();
            }
        }
    </script>
</body>

</html>