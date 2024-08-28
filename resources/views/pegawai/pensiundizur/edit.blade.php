@extends('template.pegawai')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Edit Data</h3>
                </div>
                <form action="{{ url('pegawai/pensiundizur/'.$pensiundizur->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Nama <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $pensiundizur->nama }}">
                                    </div>
                                    <input type="text" class="form-control" name="status" value="{{$pensiundizur->status}}" hidden>
                                    <input type="text" class="form-control" name="pesan" value="{{$pensiundizur->pesan}}" hidden>
                                    <input type="text" class="form-control" name="id_pegawai" value="{{$pensiundizur->id_pegawai}}" hidden>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">NIP <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nip" placeholder="NIP" value="{{ $pensiundizur->nip }}" required pattern="\d{18}" maxlength="18" title="NIP harus terdiri dari 18 digit angka" oninput="this.value = this.value.replace(/\D/g, '')">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">No. HP/WA <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="no_hp" placeholder="No. HP/WA" value="{{ substr($pensiundizur->no_hp, 0, 2) === '08' ? $pensiundizur->no_hp : '08' . substr($pensiundizur->no_hp, 2) }}" required maxlength="13" pattern="08\d{0,11}" title="No. HP/WA harus dimulai dengan '08' dan maksimal 13 digit." oninput="if (!this.value.startsWith('08')) { this.value = '08' + this.value.replace(/^08/, ''); } this.value = this.value.replace(/\D/g, '').substring(0, 13);">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Alamat <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{ $pensiundizur->alamat }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Jenis Pensiun <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="keterangan" value="{{ $pensiundizur->keterangan }}" required>
                                            <option value="{{ $pensiundizur->keterangan }}">Pilih Jenis Pensiun</option>
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
                                                <input type="file" class="custom-file-input" id="kolom_foto" name="foto" accept=".jpg, .png, .jpeg">
                                                <label class="custom-file-label" for="kolom_foto">{{ $pensiundizur->foto }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_foto"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/foto/' . $pensiundizur->foto) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
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
                                    <label class="col-sm-4 col-form-label">Pengantar dari SKPD Calon Pensiun <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_spcp" name="spcp" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_spcp">{{ $pensiundizur->spcp }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_spcp"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/spcp/' . $pensiundizur->spcp) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Permohonan Berhenti Sebagai PNS <span class="text-warning"> (Opsional)</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_spbsp" name="spbsp" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_spbsp">{{ $pensiundizur->spbsp }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_spbsp"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/spbsp/' . $pensiundizur->spbsp) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Persyaratan Bagi Calon Pensiun Sakit/Uzur <span class="text-warning"> (Opsional)</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_cps" name="cps" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_cps">{{ $pensiundizur->cps }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_cps"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/cps/' . $pensiundizur->cps) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Surat Pernyataan Bebas Temuan <span class="text-warning"> (Opsional)</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_btdi" name="btdi" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_btdi">{{ $pensiundizur->btdi }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_btdi"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/btdi/' . $pensiundizur->btdi) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Blanko Data Perorangan Calon Pensiun <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_bpcp" name="bpcp" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_bpcp">{{ $pensiundizur->bpcp }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_bpcp"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/bpcp/' . $pensiundizur->bpcp) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">SK CPNS Legalisir SKPD <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_skcpns" name="skcpns" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_skcpns">{{$pensiundizur->skcpns}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_skcpns"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/skcpns/' . $pensiundizur->skcpns) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">SK Pangkat dan Jabatan Terakhir Legalisir SKPD <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_skjt" name="skjt" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_skjt">{{$pensiundizur->skjt}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_skjt"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/skjt/' . $pensiundizur->skjt) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Riwayat Kepangkatan Disahkan SKPD <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_drp" name="drp" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_drp">{{$pensiundizur->drp}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_drp"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/drp/' . $pensiundizur->drp) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
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
                                                <input type="file" class="custom-file-input" id="kolom_pdf_berkala" name="berkala" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_berkala">{{$pensiundizur->berkala}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_berkala"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/berkala/' . $pensiundizur->berkala) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
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
                                                <input type="file" class="custom-file-input" id="kolom_pdf_skp" name="skp" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_skp">{{$pensiundizur->skp}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_skp"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/skp/' . $pensiundizur->skp) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Daftar Susunan Keluarga Disahkan Camat Domisili <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_skc" name="skc" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_skc">{{$pensiundizur->skc}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_skc"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/skc/' . $pensiundizur->skc) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Kartu Keluarga Legalisir Jika Belum Barcode <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_kk" name="kk" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_kk">{{$pensiundizur->kk}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_kk"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/kk/' . $pensiundizur->kk) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Akta Nikah <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_skan" name="an" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_an">{{$pensiundizur->an}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_an"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/an/' . $pensiundizur->an) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Akta Cerai (Menyesuaikan Jika Sudah Bercerai) <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_ac" name="ac" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_ac">{{$pensiundizur->ac}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_ac"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/ac/' . $pensiundizur->ac) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Akta Kematian <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_ak" name="ak" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_ak">{{$pensiundizur->ak}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_ak"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/ak/' . $pensiundizur->ak) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Akta Kelahiran Anak Yang Masih Ditanggung <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_akan" name="akan" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_akan">{{$pensiundizur->akan}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_akan"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/akan/' . $pensiundizur->akan) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Surat Keterangan Janda/Duda <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_skjd" name="skjd" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_skjd">{{$pensiundizur->skjd}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_skjd"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/skjd/' . $pensiundizur->skjd) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Surat Keterangan Anak Masih Sekolah <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_skms" name="skms" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_skms">{{$pensiundizur->skms}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_skms"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/skms/' . $pensiundizur->skms) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">SP Tidak Pernah Dijatuhi Hukuman Disiplin <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_skhd" name="skhd" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_skhd">{{$pensiundizur->skhd}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_skhd"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/skhd/' . $pensiundizur->skhd) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">SP Tidak Pernah Dijatuhi Hukuman Pidana <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_sppn" name="sppn" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_sppn">{{$pensiundizur->sppn}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_sppn"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/sppn/' . $pensiundizur->sppn) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Pengajuan Permintaan Pembayaran (FPP) <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_fpp" name="fpp" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_fpp">{{$pensiundizur->fpp}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_fpp"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/fpp/' . $pensiundizur->fpp) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Buku Rekening Bank <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_rekening" name="rekening" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_rekening">{{$pensiundizur->rekening}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_rekening"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/rekening/' . $pensiundizur->rekening) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">NPWP Calon Penerima Pensiun <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_npwp" name="npwp" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_npwp">{{$pensiundizur->npwp}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_npwp"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/npwp/' . $pensiundizur->npwp) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">KTP Calon Penerima Pensiun <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_ktp" name="ktp" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_ktp">{{$pensiundizur->ktp}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_ktp"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/ktp/' . $pensiundizur->ktp) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Kartu Taspen <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_taspen" name="taspen" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_taspen">{{$pensiundizur->taspen}}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-secondary upload-icon" data-input-id="kolom_pdf_taspen"><i class="fas fa-upload"></i></span>
                                                <a href="{{ asset('public/app/pensiun_dizur/taspen/' . $pensiundizur->taspen) }}" target="_blank" class="btn btn-warning preview-btn"><i class="fas fa-eye"></i></a>
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