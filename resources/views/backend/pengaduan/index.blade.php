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
        background-color: #6c757d; /* Warna latar abu-abu untuk Secondary */
        color: #fff; /* Warna teks putih */
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
                    <h3 class="card-title m-0" style="font-weight: bold; color: #FFFFFF;">Data Pengaduan</h3>

                    <!-- <button type="button" class="btn btn-success float-right mb-10" data-toggle="modal" data-target="#modal-lg"><span class="fa fa-plus"></span> Tambah Data
                    </button> -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">No. Hp</th>
                                <th class="text-center">Jenis Pengaduan</th>
                                <!-- <th class="text-center">Keterangan</th>
                                <th class="text-center">Bukti</th> -->
                                <th class="text-center">Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_pengaduan as $pengaduan)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $pengaduan->nama }}</td>
                                <td class="text-center">{{ $pengaduan->no_hp }}</td>
                                <td class="text-center">{{ $pengaduan->jenis_pengaduan }}</td>
                                <td class="text-center">
                                    @if($pengaduan->status == 'Belum Dilihat')
                                    <span class="badge badge-secondary">{{$pengaduan->status}}</span>
                                    @elseif($pengaduan->status == 'Sudah Dilihat')
                                    <span class="badge badge-primary">{{$pengaduan->status}}</span>
                                    @else
                                    {{$pengaduan->status}}
                                    @endif
                                </td>
                                <!-- <td class="text-center">{{ $pengaduan->keterangan }}</td>
                                <td class="text-center">{{ $pengaduan->bukti }}</td> -->
                                <td class="text-center">
                                    <div class="crud-buttons">
                                        <a href="{{ url("admin/pengaduan/$pengaduan->id") }}" class="btn btn-secondary" title="View">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <!-- <a href="{{ url("admin/profil/$pengaduan->id/edit") }}" class="btn btn-warning" title="Edit">
                                            <span class="fa fa-edit"></span>
                                        </a> -->
                                        <!-- <form action="{{ url('admin/pengaduan', $pengaduan->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" title="Delete" onclick="return confirm('Apakah yakin ingin menghapus?')">
                                                <span class="fa fa-trash"></span>
                                            </button>
                                        </form> -->
                                    </div>
                                </td>
                            </tr>
                            <div class="modal fade" id="modal-edit{{ $pengaduan->id }}">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Data Admin</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ url('admin/pengaduan', $pengaduan->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method("PUT")
                                            <div class="modal-body">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Nama</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="nama" value="{{ $pengaduan->nama }}">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">NIP</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="nip" value="{{ $pengaduan->nip }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="jenis_kelamin" value="{{ $pengaduan->jenis_kelamin }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">No. Telp</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="no_hp" value="{{ $pengaduan->no_hp }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="email" value="{{ $pengaduan->email }}">
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
                                                        <img src="{{ url("public/$pengaduan->foto") }}" class="img-responsive" style="width:70% ; object-fit: cover">
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
            <form action="{{ url('pegawai/pengaduan') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <!-- <label class="col-sm-2 col-form-label">Nama</label> -->
                        <div class="col-sm-10">
                            <!-- <input type="text" class="form-control" name="nama" value="{{$pegawai->nama}}" hidden> -->
                            <input type="text" class="form-control" name="id_pegawai" value="{{ $user->id }}" hidden>
                            <input type="text" class="form-control" name="nama" value="{{ $user->nama }}" hidden>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pengaduan</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="jenis_pengaduan" required>
                                <option value="">Jenis Pengaduan</option>
                                <option value="Masalah Sistem">Masalah Sistem</option>
                                <option value="Masalah Pelayanan">Masalah Pelayanan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="keterangan" placeholder="Keterangan" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Bukti</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="bukti" accept=" .pdf, .jpg, .png, .jpeg">
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