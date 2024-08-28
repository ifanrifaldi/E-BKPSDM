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
                    <h3 class="card-title m-0" style="font-weight: bold; color: #FFFFFF;">Data Pegawai</h3>
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
                                <th class="text-center">NIP</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th class="text-center">No. Telp</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_pegawai as $pegawai)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">
                                    <div class="crud-buttons">
                                        <a class="btn btn-warning" data-toggle="modal" data-target="#modal-edit{{ $pegawai->id }}"><span class="fa fa-edit"></span>
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        <form action="{{ url('admin/pegawai', $pegawai->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" title="Delete" onclick="return confirm('Apakah yakin ingin menghapus?')">
                                                <span class="fa fa-trash"></span>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <td class="text-center">{{ $pegawai->nama }}</td>
                                <td class="text-center">{{ $pegawai->nip }}</td>
                                <td class="text-center">{{ $pegawai->jenis_kelamin }}</td>
                                <td class="text-center">{{ $pegawai->no_hp }}</td>
                                <td class="text-center">{{ $pegawai->email }}</td>
                                <td class="text-center">
                                    <img src="{{ url("public/$pegawai->foto") }}" class="img-responsive" style="width: 15%; max-width: 200px; height: auto; object-fit: cover">
                                </td>
                            </tr>
                            <div class="modal fade" id="modal-edit{{ $pegawai->id }}">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Data Pegawai</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ url('admin/pegawai', $pegawai->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method("PUT")
                                            <div class="modal-body">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Nama</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="nama" value="{{ $pegawai->nama }}">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">NIP</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="nip" value="{{ $pegawai->nip }}" required pattern="\d{18}" maxlength="18" title="NIP harus terdiri dari 18 digit angka." oninput="this.value = this.value.replace(/\D/g, '')">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="jenis_kelamin" value="{{ $pegawai->jenis_kelamin }}" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">No. Telp</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="no_hp" value="{{ $pegawai->no_hp }}" required pattern="08\d{0,11}" maxlength="13" title="No. Telp harus dimulai dengan '08' dan dapat terdiri dari maksimal 13 digit angka." oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 13); if (!this.value.startsWith('08')) this.value = '08' + this.value.replace(/^08/, '')">
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="email" value="{{ $pegawai->email }}" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Masukkan alamat email yang valid dalam huruf kecil. Contoh: example@example.com. Hanya huruf kecil, angka, tanda @, dan titik yang diperbolehkan." oninput="this.value = this.value.toLowerCase().replace(/[^a-z0-9.@]/g, '')">
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
                                                        <img src="{{ url("public/$pegawai->foto") }}" class="img-responsive" style="width:70% ; object-fit: cover">
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
                <h4 class="modal-title">Tambah Data Pegawai </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('admin/pegawai') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NIP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nip" placeholder="NIP" required pattern="\d{18}" maxlength="18" title="NIP harus terdiri dari 18 digit angka." oninput="this.value = this.value.replace(/\D/g, '')">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="jenis_kelamin" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="tempat_lahir" required>
                                <option value="">Pilih Jenis Tempat Lahir</option>
                                <option value="Ketapang">Ketapang</option>
                                <option value="Kayong Utara">Kayong Utara</option>
                                <option value="Pontianak">Pontianak</option>
                                <option value="Sintang">Sintang</option>
                                <option value="Singkawang">Singkawang</option>
                                <option value="Sanggau">Sanggau</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="agama" required>
                                <option value="">Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="pendidikan_terakhir" placeholder="Pendidikan Terakhir" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tahun Lulus</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="tahun_lulus" placeholder="Tahun Lulus" required min="1900" max="2099" step="1" title="Masukkan tahun dengan format YYYY.">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Unit Kerja</label>
                        <div class="col-sm-10">
                            <input type=text " class="form-control" name="unit_kerja" placeholder="Unit Kerja" required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" required ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Eselon</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="eselon" required>
                                <option value="">Pilih Eselon</option>
                                <option value="II A">II A</option>
                                <option value="II B">II B</option>
                                <option value="III A">III A</option>
                                <option value="III B">III B</option>
                                <option value="IV A">IV A</option>
                                <option value="IV B">IV B</option>
                                <option value="V">V</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Golongan</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="golongan" required>
                                <option value="Ia">Pilih Golongan</option>
                                <option value="Ia">Ia</option>
                                <option value="Ib">Ib</option>
                                <option value="Ic">Ic</option>
                                <option value="Id">Id</option>
                                <option value="IIa">IIa</option>
                                <option value="IIb">IIb</option>
                                <option value="IIc">IIc</option>
                                <option value="IId">IId</option>
                                <option value="IIIa">IIIa</option>
                                <option value="IIIb">IIIb</option>
                                <option value="IIIc">IIIc</option>
                                <option value="IIId">IIId</option>
                                <option value="IVa">IVa</option>
                                <option value="IVb">IVb</option>
                                <option value="IVc">IVc</option>
                                <option value="IVd">IVd</option>
                                <option value="IVe">IVe</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Masa Kerja</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="masa_kerja" placeholder="Masa Kerja" required ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No. Telp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="no_hp" placeholder="No. Telp" required pattern="08\d{0,11}" maxlength="13" title="No. Telp harus terdiri dari maksimal 13 digit angka dan dimulai dengan '08'." oninput="if(!this.value.startsWith('08')) this.value = '08'; this.value = this.value.replace(/\D/g, '').substring(0, 13)">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="email" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Masukkan alamat email yang valid dalam huruf kecil. Contoh: example@example.com. Hanya huruf kecil, angka, tanda @, dan titik yang diperbolehkan." oninput="this.value = this.value.toLowerCase().replace(/[^a-z0-9.@]/g, '')">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg" required>
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