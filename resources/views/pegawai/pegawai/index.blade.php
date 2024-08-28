    @extends('template.pegawai')
    @section('content')
    <div class="card card-success card-outline">
        @foreach ($list_pegawai as $pegawai)
        <div class="card-body box-profile">
            <div class="card bg-success">
                <div class="card-header" style="background-color: #228E3B;">
                    <div class="row justify-content-end">
                        <div class="col-auto">
                            <a href="{{ route('pegawai.edit.password', $pegawai->id) }}" class="btn btn-success">
                                <i class="fas fa-key"></i> Edit Password
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body text-center">
                    <img class="profile-user-img img-fluid img-circle" src="{{ url("public/$pegawai->foto") }}" alt="User profile picture" style="width: 100px; height: 100px; border-radius: 50%;">
                    <h3 class="profile-username">{{ $pegawai->nama }}</h3>
                    <p class="text-white">{{ $pegawai->nip }}</p>
                </div>
            </div>

            <div class="card-body">
                <form action="{{ url('pegawai/pegawai', $pegawai->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Nama</b>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nama" value="{{ $pegawai->nama }}">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" hidden>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>NIP</b>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nip" value="{{ $pegawai->nip }}">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Jenis Kelamin</b>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" name="jenis_kelamin">
                                        <option value="{{ $pegawai->jenis_kelamin }}">{{ $pegawai->jenis_kelamin }}</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Tempat Lahir</b>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" name="tempat_lahir">
                                        <option value="{{ $pegawai->tempat_lahir }}">{{ $pegawai->tempat_lahir }}</option>
                                        <option value="Ketapang">Ketapang</option>
                                        <option value="Kayong Utara">Kayong Utara</option>
                                        <option value="Pontianak">Pontianak</option>
                                        <option value="Sintang">Sintang</option>
                                        <option value="Singkawang">Singkawang</option>
                                        <option value="Sanggau">Sanggau</option>
                                    </select>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Tanggal Lahir</b>
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="tanggal_lahir" value="{{ $pegawai->tanggal_lahir }}" required">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Agama</b>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" name="agama">
                                        <option value="{{ $pegawai->agama }}">{{ $pegawai->agama }}</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Alamat</b>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="alamat" value="{{ $pegawai->alamat }}" required">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Pendidikan Terakhir</b>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="pendidikan_terakhir" value="{{ $pegawai->pendidikan_terakhir }}" required">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Tahun lulus</b>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="tahun_lulus" value="{{ $pegawai->tahun_lulus }}" required min="1900" max="2099" step="1" title="Masukkan tahun dengan format YYYY.">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Unit Kerja</b>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="unit_kerja" value="{{ $pegawai->unit_kerja }}" required">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Jabatan</b>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="jabatan" value="{{ $pegawai->jabatan }}" required">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Eselon</b>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" name="eselon">
                                        <option value="{{ $pegawai->eselon }}">{{ $pegawai->jenis_kelamin }}</option>
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
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Golongan</b>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" name="golongan">
                                        <option value="{{ $pegawai->jenis_kelamin }}">{{ $pegawai->golongan }}</option>
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
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Masa Kerja</b>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="masa_kerja" value="{{ $pegawai->masa_kerja }}" required">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <b>No. Telp</b>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="no_hp" value="{{ $pegawai->no_hp }}" required pattern="08\d{0,11}" maxlength="13" title="No. Telp harus terdiri dari maksimal 13 digit angka dan diawali dengan '08'" oninput="if(!this.value.startsWith('08')) this.value = '08'; this.value = this.value.replace(/\D/g, '').substring(0, 13)">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Email</b>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="email" value="{{ $pegawai->email }}" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Masukkan alamat email yang valid dalam huruf kecil. Contoh: example@example.com. Hanya huruf kecil, angka, tanda @, dan titik yang diperbolehkan." oninput="this.value = this.value.toLowerCase().replace(/[^a-z0-9.@]/g, '')">
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item" hidden>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Password</b>
                                </div>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password" value="{{ $pegawai->password }}">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Foto</b>
                                </div>
                                <div class="col-md-6">
                                    <label for="fotoUpload" class="btn btn-outline-success">
                                        <i class="fas fa-upload"></i> Pilih Foto
                                    </label>
                                    <input id="fotoUpload" type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg" style="display: none;">
                                    <span id="selectedFileName" style="margin-left: 10px;"></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <button type="submit" class="btn btn-success btn-block"><b>Simpan</b></button>
                </form>
            </div>
        </div>
        <!-- /.card-body -->
        @endforeach
    </div>
    @endsection
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#fotoUpload').on('change', function() {
                var fileName = $(this).val().split('\\').pop();
                $('#selectedFileName').text(fileName);
            });
        });
    </script>