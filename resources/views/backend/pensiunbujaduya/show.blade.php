@extends('template.admin')

@section('content')
<style>
    .photo-container {
        text-align: center;
        margin-bottom: 20px;
    }

    .data-container {
        padding: 20px;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        background-color: #f8f9fa;
    }

    .data-heading {
        margin-bottom: 10px;
    }

    .data-divider {
        border-top: 2px solid #28a745;
        margin-top: 0;
    }

    .back-button {
        margin-bottom: 10px;
    }

    .pdf-button {
        margin-bottom: 10px;
        width: 100%;
    }

    .pdf-info {
        margin-bottom: 10px;
        font-size: 12px;
    }

    /* Custom CSS untuk responsif */
    @media (max-width: 768px) {
        .pdf-button {
            display: block;
            margin-bottom: 10px;
            width: 100%;
        }
    }

    .photo-container img {
        height: 25rem;
        /* Atur tinggi sesuai kebutuhan */
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Data Mutasi Antar Instansi</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <!-- Kolom untuk foto 4x6 -->
                    <div class="photo-container">
                        <!-- Gambar foto 4x6 akan ditampilkan di sini -->
                        <!-- Ganti placeholder dengan tag img sesuai dengan foto yang diunggah -->
                        <img src="{{ url("public/app/pensiun_bujaduya/foto/$pensiunbujaduya->foto") }}" alt="Foto 4x6" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <!-- Kolom untuk menampilkan data -->
                    <div class="data-container">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{ url('admin/pensiunbujaduya') }}" class="btn btn-success back-button"><i class="fa fa-arrow-left"></i></a>
                            </div>
                        </div>
                        <hr class="data-divider">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="data-heading">Informasi</h5>
                            </div>
                        </div>
                        <!-- Tabel untuk menampilkan data -->
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td><strong>Nama:</strong></td>
                                    <td>{{ $pensiunbujaduya->nama }}</td>
                                </tr>
                                <tr>
                                    <td><strong>NIP:</strong></td>
                                    <td>{{ $pensiunbujaduya->nip }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Alamat:</strong></td>
                                    <td>{{ $pensiunbujaduya->alamat }}</td>
                                </tr>
                                <tr>
                                    <td><strong>No. HP/WA:</strong></td>
                                    <td>{{ $pensiunbujaduya->no_hp }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Status:</strong></td>
                                    <!-- Badge status -->
                                    <td>
                                        @if($pensiunbujaduya->status == 'Diproses')
                                        <span class="badge badge-warning">{{$pensiunbujaduya->status}}</span>
                                        @elseif($pensiunbujaduya->status == 'Diterima')
                                        <span class="badge badge-success">{{$pensiunbujaduya->status}}</span>
                                        @elseif($pensiunbujaduya->status == 'Ditolak')
                                        <span class="badge badge-danger">{{$pensiunbujaduya->status}}</span>
                                        @else
                                        {{$pensiunbujaduya->status}}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Jenis Pensiun</strong></td>
                                    <td>{{ $pensiunbujaduya->keterangan }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <hr class="data-divider">
            </div>
            <div class="col-md-12">
                <!-- Kolom untuk asal -->
                <div class="data-container bg-success">
                        <div class="col-12">
                            <div class="bg-success text-white" style="text-align: center;">
                                <h5 class="mb-0"><b>Dokumen Pengajuan Pensiun</b></h5>
                            </div>
                        </div>
                </div>
            </div>
            <br>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Pengantar dari SKPD Calon Pensiun</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 1)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/spcp/$pensiunbujaduya->spcp") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 1
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>SK Belum Nikah/Berkerja Anak PNS Meninggal <span class="text-warning"> (Opsional)</span></b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 2)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/skbb/$pensiunbujaduya->skbb") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 2
                        </button>
                    </div>

                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>SK Pangkat Terakhir Suami/Istri Jika PNS <span class="text-warning"> (Opsional)</span></b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 3)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/skpt/$pensiunbujaduya->skpt") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 3
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>SK Peninjauan Masa Kerja PNS <span class="text-warning"> (Opsional)</span></b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 4)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/skmkp/$pensiunbujaduya->skmkp") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 4
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Blanko Data Perorangan Calon Pensiun</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 5)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/bpcp/$pensiunbujaduya->bpcp") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 5
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>SK CPNS Legalisir SKPD</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 6)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/skcpns/$pensiunbujaduya->skcpns") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 6
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>SK Pangkat dan Jabatan Terakhir Legalisir SKPD</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 7)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/skjt/$pensiunbujaduya->skjt") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 7
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Riwayat Kepangkatan Disahkan SKPD</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 8)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/drp/$pensiunbujaduya->drp") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 8
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Berkala Terakhir</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 9)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/berkala/$pensiunbujaduya->berkala") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 9
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>SKP PNS 1 Tahun Terakhir Legalisir SKPD</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 10)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/skp/$pensiunbujaduya->skp") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 10
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Daftar Susunan Keluarga Disahkan Camat Domisili</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 11)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/skc/$pensiunbujaduya->skc") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 11
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Kartu Keluarga Legalisir Jika Belum Barcode</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 12)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/kk/$pensiunbujaduya->kk") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 12
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Akta Nikah</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 13)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/an/$pensiunbujaduya->an") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 13
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Akta Cerai (Menyesuaikan Jika Sudah Bercerai)</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 14)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/ac/$pensiunbujaduya->ac") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 14
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Akta Kematian</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 15)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/ak/$pensiunbujaduya->ak") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 15
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Akta Kelahiran Anak Yang Masih Ditanggung</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 16)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/akan/$pensiunbujaduya->akan") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 16
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Surat Keterangan Janda/Duda</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 17)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/skjd/$pensiunbujaduya->skjd") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 17
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Surat Keterangan Anak Masih Sekolah</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 18)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/skms/$pensiunbujaduya->skms") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 18
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>SP Tidak Pernah Dijatuhi Hukuman Disiplin</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 19)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/skhd/$pensiunbujaduya->skhd") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 19
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>SP Tidak Pernah Dijatuhi Hukuman Pidana PN</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 20)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/sppn/$pensiunbujaduya->sppn") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 20
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>SP TPDH PIDANA PNS Aktif Meninggal SKPD <span class="text-warning"> (Opsional)</span></b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 21)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/tpdh/$pensiunbujaduya->tpdh") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 21
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Pengajuan Permintaan Pembayaran (FPP)</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 22)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/fpp/$pensiunbujaduya->fpp") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 22
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Buku Rekening Bank</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 23)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/rekening/$pensiunbujaduya->rekening") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 23
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>NPWP Calon Penerima Pensiun</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 24)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/npwp/$pensiunbujaduya->npwp") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 24
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>KTP Calon Penerima Pensiun</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 25)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/ktp/$pensiunbujaduya->ktp") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 25
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Kartu Taspen</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 26)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/pensiun_bujaduya/taspen/$pensiunbujaduya->taspen") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 26
                        </button>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-md-12">
                <hr class="data-divider">
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        @if ($pensiunbujaduya->status == 'Diproses')
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">Pesan Verifikasi</h5>
                        </div>
                        <form id="pesanForm" action="{{ url('admin/pensiunbujaduya/'.$pensiunbujaduya->id) }}" method="post" enctype="multipart/form-data" class="pesan-form">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id_pegawai" value="{{ $pensiunbujaduya->id_pegawai }}">
                            <input type="hidden" name="nama" value="{{ $pensiunbujaduya->nama }}">
                            <input type="hidden" name="nip" value="{{ $pensiunbujaduya->nip }}">
                            <input type="hidden" name="no_hp" value="{{ $pensiunbujaduya->no_hp }}">
                            <input type="hidden" name="alamat" value="{{ $pensiunbujaduya->alamat }}">
                            <input type="hidden" name="keterangan" value="{{ $pensiunbujaduya->keterangan }}">
                            <input type="hidden" name="status" value="Ditolak">

                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="pesan">Pesan:</label>
                                        <input type="text" class="form-control" id="pesan" name="pesan" placeholder="Masukkan pesan">
                                    </div>

                                    <div class="form-group d-flex justify-content-end">
                                        <button type="button" class="btn btn-danger mr-2" onclick="confirmReject()">
                                            <i class="fas fa-times-circle mr-1"></i> Ditolak
                                        </button>
                                        <button type="button" class="btn btn-success mr-2" onclick="confirmAccept()">
                                            <i class="fas fa-check-circle mr-1"></i> Diterima
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @endif
                        @if ($pensiunbujaduya->status != 'Diproses')
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">Pesan Verifikasi</h5>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <table class="table table-striped mb-0">
                                        <tbody>
                                            <tr>
                                                <td><b>{{ $pensiunbujaduya->pesan }}</b></td>
                                            </tr>
                                            <!-- Tambahkan informasi tujuan lainnya sesuai kebutuhan -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<br>
<script>
    function showPDF(pdfUrl) {
        window.open(pdfUrl, '_blank');
    }

    function submitForm(status) {
        // Ambil nilai pesan dari input
        var pesanValue = document.getElementById('pesan').value;

        // Jika pesan tidak diisi, atur pesan sesuai dengan status
        if (pesanValue.trim() === '') {
            if (status === 'Ditolak') {
                pesanValue = 'Berkas tidak sesuai';
            } else if (status === 'Diterima') {
                pesanValue = 'Berkas sesuai';
            }
        }

        // Set nilai pesan pada input hidden
        document.getElementById('pesanForm').querySelector('input[name="pesan"]').value = pesanValue;

        // Set nilai status pada input hidden
        document.getElementById('pesanForm').querySelector('input[name="status"]').value = status;

        // Submit form
        document.getElementById('pesanForm').submit();
    }

    function confirmReject() {
        var confirmation = confirm("Apakah Anda yakin ingin menolak?");
        if (confirmation) {
            submitForm('Ditolak');
        }
    }

    function confirmAccept() {
        var confirmation = confirm("Apakah Anda yakin ingin menerima?");
        if (confirmation) {
            submitForm('Diterima');
        }
    }
</script>
@endsection