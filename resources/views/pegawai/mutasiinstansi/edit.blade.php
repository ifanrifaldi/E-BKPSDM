@extends('template.pegawai')

@section('content')

<div class="container-fluid">
    <div class="row">
        @php
        // Variabel untuk memeriksa apakah ada form yang ditampilkan
        $showForm = false;
        @endphp
        <div class="col-12">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Lengkapi Data</h3>
                </div>
                <form action="{{ url('pegawai/mutasiinstansi/'.$mutasiinstansi->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <!-- <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Nama <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $mutasiinstansi->nama }}">
                                    </div>
                                    <input type="text" class="form-control" name="id_pegawai" value="{{$mutasiinstansi->id_pegawai}}" hidden>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">NIP <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nip" placeholder="NIP" value="{{ $mutasiinstansi->nip }}" pattern="\d{18}" maxlength="18" title="NIP harus terdiri dari 18 digit angka" oninput="this.value = this.value.replace(/\D/g, '')" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">No. HP/WA <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="no_hp" placeholder="No. HP/WA" value="{{ substr($mutasiinstansi->no_hp, 0, 2) === '08' ? $mutasiinstansi->no_hp : '08' }}" maxlength="13" pattern="08\d{0,11}" title="No. HP/WA harus dimulai dengan '08' dan dapat terdiri dari maksimal 13 digit angka." oninput="if (!this.value.startsWith('08')) { this.value = '08' + this.value.replace(/^08/, ''); } this.value = this.value.replace(/\D/g, '').substring(0, 13);" required>
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
                            </div> -->
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tujuan Mutasi<span class="text-danger">*</span></label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="tujuan">
                                            <option value="">{{ $mutasiinstansi->tujuan }}</option>
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
                            </div> -->
                            @if(in_array($mutasiinstansi->v1 , [0, 2]))
                            @php $showForm = true; @endphp
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
                                                <!-- Form untuk Tombol Upload -->
                                                <form action="{{ route('mutasiinstansi.post', $mutasiinstansi->id) }}" method="POST" enctype="multipart/form-data">
                                                    <!-- Field hidden untuk data yang ada -->
                                                    <input type="hidden" name="id_pegawai" value="{{ $mutasiinstansi->id_pegawai }}">
                                                    <input type="hidden" name="nama" value="{{ $mutasiinstansi->nama }}">
                                                    <input type="hidden" name="nip" value="{{ $mutasiinstansi->nip }}">
                                                    <input type="hidden" name="tujuan" value="{{ $mutasiinstansi->tujuan }}">
                                                    <input type="hidden" name="status" value="{{ $mutasiinstansi->status }}">
                                                    <input type="hidden" name="pesan" value="{{ $mutasiinstansi->pesan }}">
                                                    @csrf

                                                    <button type="submit" class="btn btn-success upload-icon">
                                                        <i class="fas fa-upload"></i>
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="input-group-append">
                                                <!-- Tombol On/Off -->
                                                <button type="button" class="btn btn {{ !empty($mutasiinstansi->spm) ? 'btn-info' : 'btn-secondary' }}">
                                                    <i class="fas fa-power-off"></i>
                                                </button>
                                            </div>
                                            <div class="input-group-append">
                                                <!-- Tombol Preview -->
                                                <a href="{{ asset('public/app/mutasi_instansi/spm/' . $mutasiinstansi->spm) }}" target="_blank" class="btn btn-warning preview-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if(in_array($mutasiinstansi->v2 , [0, 2]))
                            @php $showForm = true; @endphp
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Surat Usul Mutasi <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <!-- Form untuk Tombol Upload -->
                                        <form action="{{ route('mutasiinstansi.post', $mutasiinstansi->id) }}" method="POST" enctype="multipart/form-data">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="kolom_pdf_sum" name="sum" accept=".pdf">
                                                    <label class="custom-file-label" for="kolom_pdf_sum">{{ $mutasiinstansi->sum }}</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <!-- Field hidden untuk data yang ada -->
                                                    <input type="hidden" name="id_pegawai" value="{{ $mutasiinstansi->id_pegawai }}">
                                                    <input type="hidden" name="nama" value="{{ $mutasiinstansi->nama }}">
                                                    <input type="hidden" name="nip" value="{{ $mutasiinstansi->nip }}">
                                                    <input type="hidden" name="tujuan" value="{{ $mutasiinstansi->tujuan }}">
                                                    <input type="hidden" name="status" value="{{ $mutasiinstansi->status }}">
                                                    <input type="hidden" name="pesan" value="{{ $mutasiinstansi->pesan }}">
                                                    @csrf

                                                    <button type="submit" class="btn btn-success upload-icon">
                                                        <i class="fas fa-upload"></i>
                                                    </button>

                                                </div>
                                                <div class="input-group-append">
                                                    <!-- Tombol On/Off -->
                                                    <button type="button" class="btn btn {{ !empty($mutasiinstansi->sum) ? 'btn-info' : 'btn-secondary' }}">
                                                        <i class="fas fa-power-off"></i>
                                                    </button>
                                                </div>
                                                <div class="input-group-append">
                                                    <!-- Tombol Preview -->
                                                    <a href="{{ asset('public/app/mutasi_instansi/sum/' . $mutasiinstansi->sum) }}" target="_blank" class="btn btn-warning preview-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if(in_array($mutasiinstansi->v3 , [0, 2]))
                        @php $showForm = true; @endphp
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Surat Permohonan Pindah <span class="text-danger">*</span></label>
                                <div class="col-sm-8">
                                    <!-- Form untuk Tombol Upload -->
                                    <form action="{{ route('mutasiinstansi.post', $mutasiinstansi->id) }}" method="POST" enctype="multipart/form-data">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="kolom_pdf_spp" name="spp" accept=".pdf">
                                                <label class="custom-file-label" for="kolom_pdf_spp">{{ $mutasiinstansi->spp }}</label>
                                            </div>
                                            <div class="input-group-append">

                                                <!-- Field hidden untuk data yang ada -->
                                                <input type="hidden" name="id_pegawai" value="{{ $mutasiinstansi->id_pegawai }}">
                                                <input type="hidden" name="nama" value="{{ $mutasiinstansi->nama }}">
                                                <input type="hidden" name="nip" value="{{ $mutasiinstansi->nip }}">
                                                <input type="hidden" name="tujuan" value="{{ $mutasiinstansi->tujuan }}">
                                                <input type="hidden" name="status" value="{{ $mutasiinstansi->status }}">
                                                <input type="hidden" name="pesan" value="{{ $mutasiinstansi->pesan }}">
                                                @csrf

                                                <button type="submit" class="btn btn-success upload-icon">
                                                    <i class="fas fa-upload"></i>
                                                </button>

                                            </div>
                                            <div class="input-group-append">
                                                <!-- Tombol On/Off -->
                                                <button type="button" class="btn btn {{ !empty($mutasiinstansi->spp) ? 'btn-info' : 'btn-secondary' }}">
                                                    <i class="fas fa-power-off"></i>
                                                </button>
                                            </div>
                                            <div class="input-group-append">
                                                <!-- Tombol Preview -->
                                                <a href="{{ asset('public/app/mutasi_instansi/spp/' . $mutasiinstansi->spp) }}" target="_blank" class="btn btn-warning preview-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if(in_array($mutasiinstansi->v4 , [0, 2]))
                    @php $showForm = true; @endphp
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Surat Pernyataan Dari Instansi <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <form action="{{ route('mutasiinstansi.post', $mutasiinstansi->id) }}" method="POST" enctype="multipart/form-data">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="kolom_pdf_spdi" name="spdi" accept=".pdf">
                                            <label class="custom-file-label" for="kolom_pdf_spdi">{{ $mutasiinstansi->spdi }}</label>
                                        </div>
                                        <div class="input-group-append">
                                            <!-- Field hidden untuk data yang ada -->
                                            <input type="hidden" name="id_pegawai" value="{{ $mutasiinstansi->id_pegawai }}">
                                            <input type="hidden" name="nama" value="{{ $mutasiinstansi->nama }}">
                                            <input type="hidden" name="nip" value="{{ $mutasiinstansi->nip }}">
                                            <input type="hidden" name="tujuan" value="{{ $mutasiinstansi->tujuan }}">
                                            <input type="hidden" name="status" value="{{ $mutasiinstansi->status }}">
                                            <input type="hidden" name="pesan" value="{{ $mutasiinstansi->pesan }}">
                                            @csrf

                                            <button type="submit" class="btn btn-success upload-icon">
                                                <i class="fas fa-upload"></i>
                                            </button>
                                        </div>
                                        <div class="input-group-append">
                                            <!-- Tombol On/Off -->
                                            <button type="button" class="btn btn {{ !empty($mutasiinstansi->spdi) ? 'btn-info' : 'btn-secondary' }}">
                                                <i class="fas fa-power-off"></i>
                                            </button>
                                        </div>
                                        <div class="input-group-append">
                                            <!-- Tombol Preview -->
                                            <a href="{{ asset('public/app/mutasi_instansi/spdi/' . $mutasiinstansi->spdi) }}" target="_blank" class="btn btn-warning preview-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if(in_array($mutasiinstansi->v5 , [0, 2]))
                    @php $showForm = true; @endphp
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">SP Tidak Menjalani Tugas Belajar <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <form action="{{ route('mutasiinstansi.post', $mutasiinstansi->id) }}" method="POST" enctype="multipart/form-data">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="kolom_pdf_spstmtb" name="spstmtb" accept=".pdf">
                                            <label class="custom-file-label" for="kolom_pdf_spstmtb">{{ $mutasiinstansi->spstmtb }}</label>
                                        </div>
                                        <div class="input-group-append">
                                            <!-- Field hidden untuk data yang ada -->
                                            <input type="hidden" name="id_pegawai" value="{{ $mutasiinstansi->id_pegawai }}">
                                            <input type="hidden" name="nama" value="{{ $mutasiinstansi->nama }}">
                                            <input type="hidden" name="nip" value="{{ $mutasiinstansi->nip }}">
                                            <input type="hidden" name="tujuan" value="{{ $mutasiinstansi->tujuan }}">
                                            <input type="hidden" name="status" value="{{ $mutasiinstansi->status }}">
                                            <input type="hidden" name="pesan" value="{{ $mutasiinstansi->pesan }}">
                                            @csrf

                                            <button type="submit" class="btn btn-success upload-icon">
                                                <i class="fas fa-upload"></i>
                                            </button>
                                        </div>
                                        <div class="input-group-append">
                                            <!-- Tombol On/Off -->
                                            <button type="button" class="btn btn {{ !empty($mutasiinstansi->spstmtb) ? 'btn-info' : 'btn-secondary' }}">
                                                <i class="fas fa-power-off"></i>
                                            </button>
                                        </div>
                                        <div class="input-group-append">
                                            <!-- Tombol Preview -->
                                            <a href="{{ asset('public/app/mutasi_instansi/spstmtb/' . $mutasiinstansi->spstmtb) }}" target="_blank" class="btn btn-warning preview-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if(in_array($mutasiinstansi->v6 , [0, 2]))
                    @php $showForm = true; @endphp
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Surat Keputusan Jabatan Terakhir <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <form action="{{ route('mutasiinstansi.post', $mutasiinstansi->id) }}" method="POST" enctype="multipart/form-data">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="kolom_pdf_skjt" name="skjt" accept=".pdf">
                                            <label class="custom-file-label" for="kolom_pdf_skjt">{{$mutasiinstansi->skjt}}</label>
                                        </div>
                                        <div class="input-group-append">
                                            <!-- Field hidden untuk data yang ada -->
                                            <input type="hidden" name="id_pegawai" value="{{ $mutasiinstansi->id_pegawai }}">
                                            <input type="hidden" name="nama" value="{{ $mutasiinstansi->nama }}">
                                            <input type="hidden" name="nip" value="{{ $mutasiinstansi->nip }}">
                                            <input type="hidden" name="tujuan" value="{{ $mutasiinstansi->tujuan }}">
                                            <input type="hidden" name="status" value="{{ $mutasiinstansi->status }}">
                                            <input type="hidden" name="pesan" value="{{ $mutasiinstansi->pesan }}">
                                            @csrf

                                            <button type="submit" class="btn btn-success upload-icon">
                                                <i class="fas fa-upload"></i>
                                            </button>
                                        </div>
                                        <div class="input-group-append">
                                            <!-- Tombol On/Off -->
                                            <button type="button" class="btn btn {{ !empty($mutasiinstansi->skjt) ? 'btn-info' : 'btn-secondary' }}">
                                                <i class="fas fa-power-off"></i>
                                            </button>
                                        </div>
                                        <div class="input-group-append">
                                            <!-- Tombol Preview -->
                                            <a href="{{ asset('public/app/mutasi_instansi/skjt/' . $mutasiinstansi->skjt) }}" target="_blank" class="btn btn-warning preview-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if(in_array($mutasiinstansi->v7 , [0, 2]))
                    @php $showForm = true; @endphp
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Surat Keputusan CPNS/PNS <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <form action="{{ route('mutasiinstansi.post', $mutasiinstansi->id) }}" method="POST" enctype="multipart/form-data">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="kolom_pdf_sk_pns" name="sk_pns" accept=".pdf">
                                            <label class="custom-file-label" for="kolom_pdf_sk_pns">{{$mutasiinstansi->sk_pns}}</label>
                                        </div>
                                        <div class="input-group-append">
                                            <!-- Field hidden untuk data yang ada -->
                                            <input type="hidden" name="id_pegawai" value="{{ $mutasiinstansi->id_pegawai }}">
                                            <input type="hidden" name="nama" value="{{ $mutasiinstansi->nama }}">
                                            <input type="hidden" name="nip" value="{{ $mutasiinstansi->nip }}">
                                            <input type="hidden" name="tujuan" value="{{ $mutasiinstansi->tujuan }}">
                                            <input type="hidden" name="status" value="{{ $mutasiinstansi->status }}">
                                            <input type="hidden" name="pesan" value="{{ $mutasiinstansi->pesan }}">
                                            @csrf

                                            <button type="submit" class="btn btn-success upload-icon">
                                                <i class="fas fa-upload"></i>
                                            </button>

                                        </div>
                                        <div class="input-group-append">
                                            <!-- Tombol On/Off -->
                                            <button type="button" class="btn btn {{ !empty($mutasiinstansi->sk_pns) ? 'btn-info' : 'btn-secondary' }}">
                                                <i class="fas fa-power-off"></i>
                                            </button>
                                        </div>
                                        <div class="input-group-append">
                                            <!-- Tombol Preview -->
                                            <a href="{{ asset('public/app/mutasi_instansi/sk_pns/' . $mutasiinstansi->sk_pns) }}" target="_blank" class="btn btn-warning preview-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if(in_array($mutasiinstansi->v8 , [0, 2]))
                    @php $showForm = true; @endphp
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">SKP 2 Tahun Terakhir <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <form action="{{ route('mutasiinstansi.post', $mutasiinstansi->id) }}" method="POST" enctype="multipart/form-data">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="kolom_pdf_skp" name="skp" accept=".pdf">
                                            <label class="custom-file-label" for="kolom_pdf_skp">{{$mutasiinstansi->skp}}</label>
                                        </div>
                                        <div class="input-group-append">
                                            <!-- Field hidden untuk data yang ada -->
                                            <input type="hidden" name="id_pegawai" value="{{ $mutasiinstansi->id_pegawai }}">
                                            <input type="hidden" name="nama" value="{{ $mutasiinstansi->nama }}">
                                            <input type="hidden" name="nip" value="{{ $mutasiinstansi->nip }}">
                                            <input type="hidden" name="tujuan" value="{{ $mutasiinstansi->tujuan }}">
                                            <input type="hidden" name="status" value="{{ $mutasiinstansi->status }}">
                                            <input type="hidden" name="pesan" value="{{ $mutasiinstansi->pesan }}">
                                            @csrf

                                            <button type="submit" class="btn btn-success upload-icon">
                                                <i class="fas fa-upload"></i>
                                            </button>
                                        </div>
                                        <div class="input-group-append">
                                            <!-- Tombol On/Off -->
                                            <button type="button" class="btn btn {{ !empty($mutasiinstansi->skp) ? 'btn-info' : 'btn-secondary' }}">
                                                <i class="fas fa-power-off"></i>
                                            </button>
                                        </div>
                                        <div class="input-group-append">
                                            <!-- Tombol Preview -->
                                            <a href="{{ asset('public/app/mutasi_instansi/skp/' . $mutasiinstansi->skp) }}" target="_blank" class="btn btn-warning preview-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if(in_array($mutasiinstansi->v9 , [0, 2]))
                    @php $showForm = true; @endphp
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Surat Keterangan Bebas Temuan <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <form action="{{ route('mutasiinstansi.post', $mutasiinstansi->id) }}" method="POST" enctype="multipart/form-data">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="kolom_pdf_skbt" name="skbt" accept=".pdf">
                                            <label class="custom-file-label" for="kolom_pdf_skbt">{{$mutasiinstansi->skbt}}</label>
                                        </div>
                                        <div class="input-group-append">
                                            <!-- Field hidden untuk data yang ada -->
                                            <input type="hidden" name="id_pegawai" value="{{ $mutasiinstansi->id_pegawai }}">
                                            <input type="hidden" name="nama" value="{{ $mutasiinstansi->nama }}">
                                            <input type="hidden" name="nip" value="{{ $mutasiinstansi->nip }}">
                                            <input type="hidden" name="tujuan" value="{{ $mutasiinstansi->tujuan }}">
                                            <input type="hidden" name="status" value="{{ $mutasiinstansi->status }}">
                                            <input type="hidden" name="pesan" value="{{ $mutasiinstansi->pesan }}">
                                            @csrf

                                            <button type="submit" class="btn btn-success upload-icon">
                                                <i class="fas fa-upload"></i>
                                            </button>
                                        </div>
                                        <div class="input-group-append">
                                            <!-- Tombol On/Off -->
                                            <button type="button" class="btn btn {{ !empty($mutasiinstansi->skbt) ? 'btn-info' : 'btn-secondary' }}">
                                                <i class="fas fa-power-off"></i>
                                            </button>
                                        </div>
                                        <div class="input-group-append">
                                            <!-- Tombol Preview -->
                                            <a href="{{ asset('public/app/mutasi_instansi/skbt/' . $mutasiinstansi->skbt) }}" target="_blank" class="btn btn-warning preview-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if(in_array($mutasiinstansi->v10 , [0, 2]))
                    @php $showForm = true; @endphp
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Alasan Pindah <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <form action="{{ route('mutasiinstansi.post', $mutasiinstansi->id) }}" method="POST" enctype="multipart/form-data">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="kolom_pdf_alasan" name="alasan" accept=".pdf">
                                            <label class="custom-file-label" for="kolom_pdf_alasan">{{$mutasiinstansi->alasan}}</label>
                                        </div>
                                        <div class="input-group-append">
                                            <!-- Field hidden untuk data yang ada -->
                                            <input type="hidden" name="id_pegawai" value="{{ $mutasiinstansi->id_pegawai }}">
                                            <input type="hidden" name="nama" value="{{ $mutasiinstansi->nama }}">
                                            <input type="hidden" name="nip" value="{{ $mutasiinstansi->nip }}">
                                            <input type="hidden" name="tujuan" value="{{ $mutasiinstansi->tujuan }}">
                                            <input type="hidden" name="status" value="{{ $mutasiinstansi->status }}">
                                            <input type="hidden" name="pesan" value="{{ $mutasiinstansi->pesan }}">
                                            @csrf

                                            <button type="submit" class="btn btn-success upload-icon">
                                                <i class="fas fa-upload"></i>
                                            </button>
                                        </div>
                                        <div class="input-group-append">
                                            <!-- Tombol On/Off -->
                                            <button type="button" class="btn btn {{ !empty($mutasiinstansi->alasan) ? 'btn-info' : 'btn-secondary' }}">
                                                <i class="fas fa-power-off"></i>
                                            </button>
                                        </div>
                                        <div class="input-group-append">
                                            <!-- Tombol Preview -->
                                            <a href="{{ asset('public/app/mutasi_instansi/alasan/' . $mutasiinstansi->alasan) }}" target="_blank" class="btn btn-warning preview-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif
            </div>
        </div>
        @if($showForm)
        <div class="col-12">
            <hr class="bg-success">
        </div>
        <form id="mutasiInstansiForm" action="{{ route('mutasiinstansi.updateStatus', $mutasiinstansi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Input fields for status and pesan -->
            <input type="hidden" name="status" value="{{ $mutasiinstansi->status }}">
            <input type="hidden" name="pesan" value="{{ $mutasiinstansi->pesan }}">

            <!-- Hidden input fields for file uploads -->
            <input type="hidden" id="spm" name="spm" value="{{ $mutasiinstansi->spm }}">
            <input type="hidden" id="sum" name="sum" value="{{ $mutasiinstansi->sum }}">
            <input type="hidden" id="spp" name="spp" value="{{ $mutasiinstansi->spp }}">
            <input type="hidden" id="spdi" name="spdi" value="{{ $mutasiinstansi->spdi }}">
            <input type="hidden" id="spstmtb" name="spstmtb" value="{{ $mutasiinstansi->spstmtb }}">
            <input type="hidden" id="skjt" name="skjt" value="{{ $mutasiinstansi->skjt }}">
            <input type="hidden" id="sk_pns" name="sk_pns" value="{{ $mutasiinstansi->sk_pns }}">
            <input type="hidden" id="skp" name="skp" value="{{ $mutasiinstansi->skp }}">
            <input type="hidden" id="skbt" name="skbt" value="{{ $mutasiinstansi->skbt }}">
            <input type="hidden" id="alasan" name="alasan" value="{{ $mutasiinstansi->alasan }}">

            <!-- Button -->
            <div class="card-footer">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" id="submitButton" class="btn btn-success float-right" disabled>
                        <span class="fa fa-save"></span> Ajukan Berkas
                    </button>
                </div>
            </div>
        </form>

        @endif
        </form>
    </div>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- Card -->
        <div class="card">
            <!-- Header -->
            <div class="card-header bg-success text-white">
                Data Pegawai
            </div>
            <!-- Isi Tabel -->
            <div class="card-body bg-white">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <!-- Menampilkan Data Pegawai -->
                            <tr>
                                <th>Nama</th>
                                <td>{{ $mutasiinstansi->pegawai->nama }}</td>
                            </tr>
                            <tr>
                                <th>NIP</th>
                                <td>{{ $mutasiinstansi->pegawai->nip }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>{{ $mutasiinstansi->pegawai->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <td>{{ $mutasiinstansi->pegawai->tempat_lahir }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>{{ $mutasiinstansi->pegawai->tanggal_lahir }}</td>
                            </tr>
                            <tr>
                                <th>Agama</th>
                                <td>{{ $mutasiinstansi->pegawai->agama }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $mutasiinstansi->pegawai->alamat }}</td>
                            </tr>
                            <tr>
                                <th>Pendidikan Terakhir</th>
                                <td>{{ $mutasiinstansi->pegawai->pendidikan_terakhir }}</td>
                            </tr>
                            <tr>
                                <th>Tahun Lulus</th>
                                <td>{{ $mutasiinstansi->pegawai->tahun_lulus }}</td>
                            </tr>
                            <tr>
                                <th>Unit Kerja</th>
                                <td>{{ $mutasiinstansi->pegawai->unit_kerja }}</td>
                            </tr>
                            <tr>
                                <th>Jabatan</th>
                                <td>{{ $mutasiinstansi->pegawai->jabatan }}</td>
                            </tr>
                            <tr>
                                <th>Eselon</th>
                                <td>{{ $mutasiinstansi->pegawai->eselon }}</td>
                            </tr>
                            <tr>
                                <th>Golongan</th>
                                <td>{{ $mutasiinstansi->pegawai->golongan }}</td>
                            </tr>
                            <tr>
                                <th>Masa Kerja</th>
                                <td>{{ $mutasiinstansi->pegawai->masa_kerja }}</td>
                            </tr>
                            <tr>
                                <th>No. Telp</th>
                                <td>{{ $mutasiinstansi->pegawai->no_hp }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $mutasiinstansi->pegawai->email }}</td>
                            </tr>
                            <tr>
                                <th>Foto</th>
                                <td>
                                    <img src="{{ url('public/'.$mutasiinstansi->pegawai->foto) }}" alt="Foto" style="width: 100px; height: auto;">
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
</div>


<!-- Include JavaScript for validation -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('mutasiInstansiForm');
    const submitButton = document.getElementById('submitButton');

    function validateForm() {
        const fileInputs = ['spm', 'sum', 'spp', 'spdi', 'spstmtb', 'skjt', 'sk_pns', 'skp', 'skbt', 'alasan'];
        let allFilesUploaded = true;

        fileInputs.forEach(fileType => {
            const fileInput = document.getElementById(fileType);
            if (!fileInput.value) {
                allFilesUploaded = false;
            }
        });

        submitButton.disabled = !allFilesUploaded;
        if (!allFilesUploaded) {
            alert('Silahkan lengkapi berkas terlebih dahulu.');
        }
    }

    // Validate form on page load
    validateForm();
});
</script>

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