@extends('template.pegawai')
@section('content')
<div class="container-fluid">


    <!-- data pegawaiiii -->
    <div class="row">
        <div class="col-md-12">
            <!-- Card -->
            <div class="card">
                <!-- Header -->
                <div class="card-header bg-success text-white">
                    Biodata Pegawai
                </div>
                <!-- Isi Tabel -->
                <div class="card-body bg-white">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <!-- Menampilkan Data Pegawai -->
                                <tr>
                                    <th>Nama</th>
                                    <td>{{ $user->nama }}</td>
                                </tr>
                                <tr>
                                    <th>NIP</th>
                                    <td>{{ $user->nip }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>{{ $user->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <th>Tempat Lahir</th>
                                    <td>{{ $user->tempat_lahir }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>{{ $user->tanggal_lahir }}</td>
                                </tr>
                                <tr>
                                    <th>Agama</th>
                                    <td>{{ $user->agama }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $user->alamat }}</td>
                                </tr>
                                <tr>
                                    <th>Pendidikan Terakhir</th>
                                    <td>{{ $user->pendidikan_terakhir }}</td>
                                </tr>
                                <tr>
                                    <th>Tahun Lulus</th>
                                    <td>{{ $user->tahun_lulus }}</td>
                                </tr>
                                <tr>
                                    <th>Unit Kerja</th>
                                    <td>{{ $user->unit_kerja }}</td>
                                </tr>
                                <tr>
                                    <th>Jabatan</th>
                                    <td>{{ $user->jabatan }}</td>
                                </tr>
                                <tr>
                                    <th>Eselon</th>
                                    <td>{{ $user->eselon }}</td>
                                </tr>
                                <tr>
                                    <th>Golongan</th>
                                    <td>{{ $user->golongan }}</td>
                                </tr>
                                <tr>
                                    <th>Masa Kerja</th>
                                    <td>{{ $user->masa_kerja }}</td>
                                </tr>
                                <tr>
                                    <th>No. Telp</th>
                                    <td>{{ $user->no_hp }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th>Foto</th>
                                    <td>
                                        <img src="{{ url('public/'.$user->foto) }}" alt="Foto" style="width: 100px; height: auto;">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12">
                        <hr class="bg-success">
                    </div>
                    <div class="card-footer">
                        <div class="offset-sm-2 col-sm-10">
                            <a href="{{ url('/pegawai/pegawai') }}" class="btn btn-success float-right">
                                <span class="fa fa-edit"></span> Edit Biodata
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end data pegawaiiii -->


    <div class="row">
        <div class="col-12">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data</h3>
                </div>
                <form action="{{ url('pegawai/mutasiinstansi') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <input type="text" class="form-control" name="id_pegawai" value="{{ $user->id }}" hidden>
                            <input type="text" class="form-control" name="nip" value="{{ $user->nip}}" hidden>
                            <input type="text" class="form-control" name="nama" value="{{ $user->nama }}" hidden>
                            <!-- <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Nama <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                                    </div>
                                   
                                </div>
                            </div> -->
                            <!-- <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Nama <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                                    </div>
                                    <input type="text" class="form-control" name="id_pegawai" value="{{ $user->id }}" hidden>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">NIP <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nip" placeholder="NIP" required pattern="\d{18}" maxlength="18" title="NIP harus terdiri dari 18 digit angka" oninput="this.value = this.value.replace(/\D/g, '')">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">No. HP/WA <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="no_hp" placeholder="No. HP/WA" required value="08" maxlength="13" pattern="08\d{0,11}" title="No. HP/WA harus dimulai dengan '08' dan dapat terdiri dari maksimal 13 digit angka." oninput="this.value = '08' + this.value.slice(2).replace(/\D/g, '').substring(0, 11)">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Alamat <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Asal Instansi <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="asal" placeholder="Asal Instansi" required>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tujuan Mutasi<span class="text-danger">*</span></label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="tujuan" required>
                                            <option value="">Pilih Tujuan Mutasi</option>
                                            <option value="Dinas Kominfo Ketpang">Dinas Kominfo Ketpang</option>
                                            <option value="Dinas Pariwisata dan Budaya Ketapang">Dinas Pariwisata dan Budaya Ketapang</option>
                                            <option value="Dinas Pemuda dan Olahraga Ketapang">Dinas Pemuda dan Olahraga Ketapang</option>
                                            <option value="Dinas PUPR Ketapang">Dinas PUPR Ketapang</option>
                                            <option value="Dinas Pendidikan Ketapang">Dinas Pendidikan Ketapang</option>
                                            <option value="Dinas Pertanian Kabupaten Ketapang">Dinas Pertanian Kabupaten Ketapang</option>
                                            <option value="Dinas Perkim LH Ketapang">Dinas Perkim LH Ketapang</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <hr class="bg-success">
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Foto Formal <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_foto" name="foto" accept=".jpg, .png, .jpeg" required>
                                                <label class="custom-file-label" for="kolom_foto">Pilih file foto</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_foto"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_foto"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Surat Persetujuan Mutasi <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_spm" name="spm" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_spm">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_spm"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_spm"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Surat Usul Mutasi<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_sum" name="sum" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_sum">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_sum"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_sum"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Surat Permohonan Pindah <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_spp" name="spp" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_spp">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_spp"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_spp"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Surat Pernyataan Dari Instansi <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_spdi" name="spdi" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_spdi">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_spdi"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_spdi"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">SP Tidak Menjalani Tugas Belajar <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_spstmtb" name="spstmtb" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_spstmtb">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_spstmtb"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_spstmtb"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Surat Keputusan Jabatan Terakhir <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_skjt" name="skjt" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_skjt">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_skjt"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_skjt"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Surat Keputusan CPNS/PNS <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_sk_pns" name="sk_pns" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_sk_pns">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_sk_pns"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_sk_pns"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">SKP 2 Tahun Terakhir <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_skp" name="skp" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_skp">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_skp"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_skp"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Surat Keterangan Bebas Temuan <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_skbt" name="skbt" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_skbt">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_skbt"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_skbt"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Alasan Pindah <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_alasan" name="alasan" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_alasan">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_alasan"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_alasan"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="col-12">
                        <hr class="bg-success">
                    </div> -->
                    <div class="card-footer">
                        <div class="offset-sm-2 col-sm-10">
                            <button class="btn btn-success float-right"><span class="fa fa-save"></span> Buat Draf Pengajuan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const fileInputs = document.querySelectorAll('.custom-file-input');

        fileInputs.forEach(function(input) {
            input.addEventListener('change', function() {
                const fileName = this.files[0].name;
                const label = this.nextElementSibling;
                label.innerText = fileName;
            });
        });

        // Ganti event listener untuk tombol preview
        const previewButtons = document.querySelectorAll('.preview-btn');
        previewButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const inputId = this.getAttribute('data-input-id');
                const inputFile = document.getElementById(inputId);
                const file = inputFile.files[0];

                if (file) {
                    const previewUrl = URL.createObjectURL(file);
                    window.open(previewUrl, '_blank');
                } else {
                    alert('File belum diunggah.');
                }
            });
        });

        // Tambahkan event listener untuk setiap ikon upload
        const uploadIcons = document.querySelectorAll('.upload-icon');
        uploadIcons.forEach(function(icon) {
            icon.addEventListener('click', function() {
                // Ambil ID input file terkait
                const inputId = this.getAttribute('data-input-id');
                // Ambil input file terkait
                const inputFile = document.getElementById(inputId);
                // Simulasikan klik pada input file
                inputFile.click();
            });
        });
    });
</script>

@endsection