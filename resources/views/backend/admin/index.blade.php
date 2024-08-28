@extends('template.admin')
@section('content')
<style>
    .crud-buttons {
        display: flex;
        gap: 10px;
        justify-content: center;
        /* Pusatkan tombol di dalam div */
    }

    .crud-buttons a,
    .crud-buttons button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        /* Lebar dan tinggi sama untuk membuat tombol menjadi lingkaran */
        height: 40px;
        font-size: 14px;
        font-weight: bold;
        color: #fff;
        border: none;
        border-radius: 50%;
        /* Mengubah tombol menjadi lingkaran */
        text-decoration: none;
        cursor: pointer;
        transition: all 0.3s ease;
        background-color: #6c757d;
        /* Warna latar abu-abu untuk semua tombol */
        position: relative;
        /* Menambahkan posisi relatif untuk ikon */
    }

    .crud-buttons .btn-secondary {
        background-color: #6c757d;
        /* Warna latar abu-abu untuk Secondary */
        color: #fff;
        /* Warna teks putih */
    }

    .crud-buttons .btn-warning {
        background-color: #ffc107;
        /* Kuning untuk Edit */
    }

    .crud-buttons .btn-danger {
        background-color: #dc3545;
        /* Merah untuk Delete */
    }

    .crud-buttons a .fa,
    .crud-buttons button .fa {
        position: absolute;
        /* Menjadikan ikon posisi absolut */
        top: 50%;
        /* Posisi vertikal di tengah */
        left: 50%;
        /* Posisi horizontal di tengah */
        transform: translate(-50%, -50%);
        /* Geser ikon ke tengah */
    }

    .crud-buttons a:hover,
    .crud-buttons button:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .crud-buttons a:focus,
    .crud-buttons button:focus {
        outline: none;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card" style="background-color: white; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="card-header d-flex justify-content-between align-items-center" style="border-radius: 15px 15px 0 0;  background: linear-gradient(to right, #28A745, #DEE9DE, #28A745, #DEE9DE);">
                    <h3 class="card-title m-0" style="font-weight: bold; color: #FFFFFF;">Data Admin</h3>
                    <button type="button" class="btn btn-success ml-auto" data-toggle="modal" data-target="#modal-lg"><span class="fa fa-plus"></span>
                    </button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_admin as $admin)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">
                                    <div class="crud-buttons">
                                        <a class="btn btn-warning" data-toggle="modal" data-target="#modal-edit{{ $admin->id }}"><span class="fa fa-edit"></span>
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        <form action="{{ url('admin/admin', $admin->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" title="Delete" onclick="return confirm('Apakah yakin ingin menghapus?')">
                                                <span class="fa fa-trash"></span>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <!-- <td class="text-center">
                                    <div class="btn-group">

                                        <a class="btn btn-warning" data-toggle="modal" data-target="#modal-edit{{ $admin->id }}"><span class="fa fa-edit"></span></a>
                                        @include('template.utils.delete', [
                                        'url' => url('admin/admin', $admin->id),
                                        ])
                                    </div>
                                </td> -->
                                <td class="text-center">{{ $admin->nama }}</td>
                                <td class="text-center">{{ $admin->username }}</td>
                                <td class="text-center">
                                    <img src="{{ url("public/$admin->foto") }}" class="img-responsive" style="width: 15%; max-width: 200px; height: auto; object-fit: cover">
                                </td>

                            </tr>
                            <div class="modal fade" id="modal-edit{{ $admin->id }}">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Data Admin</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ url('admin/admin', $admin->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method("PUT")
                                            <div class="modal-body">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Nama</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="nama" value="{{ $admin->nama }}">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Username</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="username" value="{{ $admin->username }}" required pattern="[a-z0-9_]*" title="Username hanya boleh berisi huruf kecil, angka, dan tanda underscore. Hanya huruf kecil yang diperbolehkan." oninput="this.value = this.value.toLowerCase().replace(/[^a-z0-9_]/g, '')">
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" name="password">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Foto</label>
                                                    <div class="col-md-5">
                                                        <img src="{{ url("public/$admin->foto") }}" class="img-responsive" style="width:70% ; object-fit: cover">
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button class="btn btn-default" data-dismiss="modal">Kembali</button>
                                                <button class="btn btn-success">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Admin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('admin/admin') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="username" placeholder="Username" required pattern="[a-z0-9_]*" title="Username hanya boleh berisi huruf kecil, angka, dan tanda underscore. Hanya huruf kecil yang diperbolehkan." oninput="this.value = this.value.toLowerCase().replace(/[^a-z0-9_]/g, '')">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg">
                        </div>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button class="btn btn-default" data-dismiss="modal">Kembali</button>
                    <button class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection