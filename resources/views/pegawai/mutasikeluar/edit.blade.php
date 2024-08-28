@extends('template.pegawai')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Edit Data</h3>
                </div>
                <form action="{{ url('pegawai/mutasikeluar/'.$mutasikeluar->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Nama <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $mutasikeluar->nama }}">
                                    </div>
                                    <input type="text" class="form-control" name="id_pegawai" value="{{$mutasikeluar->id_pegawai}}" hidden>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">NIP <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nip" placeholder="NIP" value="{{ $mutasikeluar->nip }}" required pattern="\d{18}" maxlength="18" title="NIP harus terdiri dari 18 digit angka" oninput="this.value = this.value.replace(/\D/g, '')">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">No. HP/WA <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="no_hp" placeholder="No. HP/WA" value="{{ isset($mutasikeluar) ? (substr($mutasikeluar->no_hp, 0, 2) === '08' ? $mutasikeluar->no_hp : '08' . $mutasikeluar->no_hp) : '' }}" required maxlength="13" pattern="08\d{0,11}" title="No. HP/WA harus dimulai dengan '08' dan maksimal 13 digit." oninput="if (this.value && !this.value.startsWith('08')) { this.value = '08' + this.value.replace(/^08/, ''); } this.value = this.value.replace(/\D/g, '').substring(0, 13);">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Alamat <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{ $mutasikeluar->alamat }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Asal Instansi <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="asal" placeholder="Asal Instansi" value="{{ $mutasikeluar->asal }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Instansi Tujuan <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="tujuan" placeholder="Instansi Tujuan" value="{{ $mutasikeluar->tujuan }}">
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
                                                <label class="custom-file-label" for="kolom_foto">{{ $mutasikeluar->foto }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_foto"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/mutasi_keluar_daerah/foto/' . $mutasikeluar->foto) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Surat Rekomendasi Instansi Asal <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_sr" name="sr" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_sr">{{ $mutasikeluar->sr }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_sr"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/mutasi_keluar_daerah/sr/' . $mutasikeluar->sr) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
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
                                                <label class="custom-file-label" for="kolom_pdf_sum">{{ $mutasikeluar->sum }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_sum"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/mutasi_keluar_daerah/sum/' . $mutasikeluar->sum) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
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
                                                <label class="custom-file-label" for="kolom_pdf_spp">{{ $mutasikeluar->spp }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_spp"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/mutasi_keluar_daerah/spp/' . $mutasikeluar->spp) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
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
                                                <label class="custom-file-label" for="kolom_pdf_spdi">{{ $mutasikeluar->spdi }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_spdi"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/mutasi_keluar_daerah/spdi/' . $mutasikeluar->spdi) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
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
                                                <label class="custom-file-label" for="kolom_pdf_spstmtb">{{ $mutasikeluar->spstmtb }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_spstmtb"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/mutasi_keluar_daerah/spstmtb/' . $mutasikeluar->spstmtb) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
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
                                                <label class="custom-file-label" for="kolom_pdf_skjt">{{$mutasikeluar->skjt}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_skjt"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/mutasi_keluar_daerah/skjt/' . $mutasikeluar->skjt) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
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
                                                <label class="custom-file-label" for="kolom_pdf_sk_pns">{{$mutasikeluar->sk_pns}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_sk_pns"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/mutasi_keluar_daerah/sk_pns/' . $mutasikeluar->sk_pns) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
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
                                                <label class="custom-file-label" for="kolom_pdf_skp">{{$mutasikeluar->skp}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_skp"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/mutasi_keluar_daerah/skp/' . $mutasikeluar->skp) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
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
                                                <label class="custom-file-label" for="kolom_pdf_skbt">{{$mutasikeluar->skbt}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_skbt"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/mutasi_keluar_daerah/skbt/' . $mutasikeluar->skbt) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
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
                                                <label class="custom-file-label" for="kolom_pdf_alasan">{{$mutasikeluar->alasan}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_alasan"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/mutasi_keluar_daerah/alasan/' . $mutasikeluar->alasan) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
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