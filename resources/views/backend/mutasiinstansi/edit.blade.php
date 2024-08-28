@extends('template.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Edit Data</h3>
                </div>
                <form action="{{ url('admin/mutasiinstansi/'.$mutasiinstansi->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Nama <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $mutasiinstansi->nama }}">
                                    </div>
                                    <input type="text" class="form-control" name="status" value="{{$mutasiinstansi->status}}" hidden>
                                    <input type="text" class="form-control" name="pesan" value="{{$mutasiinstansi->pesan}}" hidden>
                                    <input type="text" class="form-control" name="id_pegawai" value="{{$mutasiinstansi->id_pegawai}}" hidden>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">NIP <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nip" placeholder="NIP" value="{{ $mutasiinstansi->nip }}" required pattern="\d{18}" maxlength="18" title="NIP harus terdiri dari 18 digit angka" oninput="this.value = this.value.replace(/\D/g, '')">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">No. HP/WA <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="no_hp" placeholder="No. HP/WA" value="{{ $mutasiinstansi->no_hp }}" required maxlength="13" pattern="08\d{0,11}" title="No. HP/WA harus dimulai dengan '08' dan dapat terdiri dari maksimal 13 digit angka." oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 13); if (!this.value.startsWith('08')) this.value = '08' + this.value.replace(/^08/, '')">
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Alamat <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{ $mutasiinstansi->alamat }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Asal Instansi <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="asal" placeholder="Asal Instansi" value="{{ $mutasiinstansi->asal }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Instansi Tujuan <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="tujuan" placeholder="Instansi Tujuan" value="{{ $mutasiinstansi->tujuan }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <hr class="bg-success">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Foto Formal <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_foto" name="foto" accept=".jpg, .png, .jpeg">
                                                <label class="custom-file-label" for="kolom_foto">{{ $mutasiinstansi->foto }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_foto"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/mutasi_instansi/foto/' . $mutasiinstansi->foto) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Surat Persetujuan Mutasi <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_spm" name="spm" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_spm">{{ $mutasiinstansi->spm }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_spm"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/mutasi_instansi/spm/' . $mutasiinstansi->spm) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Surat Usul Mutasi <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_sum" name="sum" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_sum">{{ $mutasiinstansi->sum }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_sum"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/mutasi_instansi/sum/' . $mutasiinstansi->sum) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
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
                                                <input type="file" class="custom-file-input" id="kolom_pdf_spp" name="spp" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_spp">{{ $mutasiinstansi->spp }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_spp"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/mutasi_instansi/spp/' . $mutasiinstansi->spp) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
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
                                                <input type="file" class="custom-file-input" id="kolom_pdf_spdi" name="spdi" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_spdi">{{ $mutasiinstansi->spdi }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_spdi"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/mutasi_instansi/spdi/' . $mutasiinstansi->spdi) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
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
                                                <input type="file" class="custom-file-input" id="kolom_pdf_spstmtb" name="spstmtb" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_spstmtb">{{ $mutasiinstansi->spstmtb }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_spstmtb"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/mutasi_instansi/spstmtb/' . $mutasiinstansi->spstmtb) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
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
                                                <input type="file" class="custom-file-input" id="kolom_pdf_skjt" name="skjt" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_skjt">{{$mutasiinstansi->skjt}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_skjt"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/mutasi_instansi/skjt/' . $mutasiinstansi->skjt) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
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
                                                <input type="file" class="custom-file-input" id="kolom_pdf_sk_pns" name="sk_pns" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_sk_pns">{{$mutasiinstansi->sk_pns}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_sk_pns"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/mutasi_instansi/sk_pns/' . $mutasiinstansi->sk_pns) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
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
                                                <input type="file" class="custom-file-input" id="kolom_pdf_skp" name="skp" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_skp">{{$mutasiinstansi->skp}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_skp"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/mutasi_instansi/skp/' . $mutasiinstansi->skp) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
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
                                                <input type="file" class="custom-file-input" id="kolom_pdf_skbt" name="skbt" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_skbt">{{$mutasiinstansi->skbt}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_skbt"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/mutasi_instansi/skbt/' . $mutasiinstansi->skbt) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
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
                                                <input type="file" class="custom-file-input" id="kolom_pdf_alasan" name="alasan" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_alasan">{{$mutasiinstansi->alasan}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_alasan"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/mutasi_instansi/alasan/' . $mutasiinstansi->alasan) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <hr class="bg-success">
                    </div>
                    <div class="card-footer">
                        <div class="offset-sm-2 col-sm-10">
                            <button class="btn btn-success float-right"><span class="fa fa-save"></span> Simpan</button>
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