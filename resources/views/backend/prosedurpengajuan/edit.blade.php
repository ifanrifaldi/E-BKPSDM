@extends('template.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Edit Data</h3>
                </div>
                <br>
                <form action="{{ url('admin/prosedurpengajuan/'.$prosedurpengajuan->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Prosedur Mutasi Antar Instansi<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_sekolah" name="instansi" accept=".pdf" >
                                                <label class="custom-file-label" for="kolom_pdf_instansi">{{ $prosedurpengajuan->instansi }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_instansi"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/prosedur_pengajuan/instansi/' . $prosedurpengajuan->instansi) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Prosedur Mutasi Antar Sekolah<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_sekolah" name="sekolah" accept=".pdf" >
                                                <label class="custom-file-label" for="kolom_pdf_sekolah">{{ $prosedurpengajuan->sekolah }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_sekolah"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/prosedur_pengajuan/sekolah/' . $prosedurpengajuan->sekolah) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Prosedur Mutasi Masuk Ketapang<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_masuk" name="masuk" accept=".pdf" >
                                                <label class="custom-file-label" for="kolom_pdf_masuk">{{ $prosedurpengajuan->masuk }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_masuk"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/prosedur_pengajuan/masuk/' . $prosedurpengajuan->masuk) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Prosedur Mutasi Keluar Ketapang<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_keluar" name="keluar" accept=".pdf" >
                                                <label class="custom-file-label" for="kolom_pdf_keluar">{{ $prosedurpengajuan->keluar }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_keluar"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/prosedur_pengajuan/keluar/' . $prosedurpengajuan->keluar) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Prosedur Pensiun Dini & Uzur<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_dizur" name="dizur" accept=".pdf" >
                                                <label class="custom-file-label" for="kolom_pdf_dizur">{{ $prosedurpengajuan->dizur }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_dizur"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/prosedur_pengajuan/dizur/' . $prosedurpengajuan->dizur) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Prosedur Pensiun BUP, Janda/Duda/Yatim<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_bujaduya" name="bujaduya" accept=".pdf" >
                                                <label class="custom-file-label" for="kolom_pdf_bujaduya">{{ $prosedurpengajuan->bujaduya }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_bujaduya"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/prosedur_pengajuan/bujaduya/' . $prosedurpengajuan->bujaduya) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
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
                    <br>
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