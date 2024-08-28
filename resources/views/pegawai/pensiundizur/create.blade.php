@extends('template.pegawai')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data</h3>
                </div>
                <form action="{{ url('pegawai/pensiundizur') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
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
                                        <input type="text" class="form-control" name="no_hp" placeholder="No. HP/WA" required maxlength="13" pattern="08\d{0,11}" title="No. HP/WA harus dimulai dengan '08' dan maksimal 13 digit." oninput="if (!this.value.startsWith('08')) { this.value = '08' + this.value.replace(/^08/, ''); } this.value = this.value.replace(/\D/g, '').substring(0, 13);">
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
                                    <label class="col-sm-4 col-form-label">Jenis Pensiun <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="keterangan" required>
                                            <option value="">Pilih Jenis Pensiun</option>
                                            <option value="Pensiun Dini">Pensiun Dini</option>
                                            <option value="Pensiun Uzur">Pensiun Uzur</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
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
                            </div>
                            <div class="col-12">
                                <hr class="bg-success">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Pengantar dari SKPD Calon Pensiun<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_spcp" name="spcp" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_spcp">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_spcp"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_spcp"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Permohonan Berhenti Sebagai PNS<span class="text-warning"> (Opsional)</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_spbsp" name="spbsp" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_spbsp">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_spbsp"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_spbsp"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Persyaratan Bagi Calon Pensiun Sakit/Uzur<span class="text-warning"> (Opsional)</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_cps" name="cps" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_cps">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_cps"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_cps"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Surat Pernyataan Bebas Temuan<span class="text-warning"> (Opsional)</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_btdi" name="btdi" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_btdi">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_btdi"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_btdi"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Blanko Data Perorangan Calon Pensiun<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_bpcp" name="bpcp" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_bpcp">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_bpcp"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_bpcp"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">SK CPNS Legalisir SKPD<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_skcpns" name="skcpns" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_skcpns">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_skcpns"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_skcpns"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">SK Pangkat dan Jabatan Terakhir Legalisir SKPD<span class="text-danger">*</span></label>
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
                                    <label class="col-sm-4 col-form-label">Riwayat Kepangkatan Disahkan SKPD<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_drp" name="drp" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_drp">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_drp"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_drp"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Berkala Terakhir <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_berkala" name="berkala" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_berkala">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_berkala"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_berkala"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">SKP PNS 1 Tahun Terakhir Legalisir SKPD <span class="text-danger">*</span></label>
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
                                    <label class="col-sm-4 col-form-label">Daftar Susunan Keluarga Disahkan Camat Domisili<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_skc" name="skc" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_skc">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_skc"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_skc"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Kartu Keluarga Legalisir Jika Belum Barcode<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_kk" name="kk" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_kk">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_kk"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_kk"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Akta Nikah<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_an" name="an" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_an">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_an"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_an"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Akta Cerai (Menyesuaikan Jika Sudah Bercerai)<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_ac" name="ac" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_ac">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_ac"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_ac"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Akta Kematian<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_ak" name="ak" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_ak">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_ak"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_ak"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Akta Kelahiran Anak Yang Masih Ditanggung<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_akan" name="akan" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_akan">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_akan"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_akan"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Surat Keterangan Janda/Duda<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_skjd" name="skjd" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_skjd">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_skjd"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_skjd"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Surat Keterangan Anak Masih Sekolah<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_skms" name="skms" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_skms">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_skms"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_skms"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">SP Tidak Pernah Dijatuhi Hukuman Disiplin<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_skhd" name="skhd" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_skhd">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_skhd"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_skhd"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">SP Tidak Pernah Dijatuhi Hukuman Pidana<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_sppn" name="sppn" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_sppn">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_sppn"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_sppn"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Pengajuan Permintaan Pembayaran (FPP)<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_fpp" name="fpp" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_fpp">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_fpp"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_fpp"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Buku Rekening Bank<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_rekening" name="rekening" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_rekening">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_rekening"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_rekening"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">NPWP Calon Penerima Pensiun<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_npwp" name="npwp" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_npwp">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_npwp"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_npwp"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">KTP Calon Penerima Pensiun<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_ktp" name="ktp" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_ktp">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_ktp"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_ktp"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Kartu Taspen<span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_taspen" name="taspen" accept=".pdf" required>
                                                <label class="custom-file-label" for="kolom_pdf_taspen">Pilih file PDF</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_taspen"><i class="fas fa-upload"></i></span>
                                                <button type="button" class="btn btn-warning preview-btn" data-input-id="kolom_pdf_taspen"><i class="fas fa-eye"></i></button>
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