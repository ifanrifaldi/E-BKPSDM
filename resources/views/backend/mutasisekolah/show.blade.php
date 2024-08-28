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
                    <h3 class="card-title">Data Mutasi Sekolah</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <!-- Kolom untuk foto 4x6 -->
                    <div class="photo-container">
                        <!-- Gambar foto 4x6 akan ditampilkan di sini -->
                        <!-- Ganti placeholder dengan tag img sesuai dengan foto yang diunggah -->
                        <img src="{{ url("public/app/mutasi_sekolah/foto/$mutasisekolah->foto") }}" alt="Foto 4x6" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <!-- Kolom untuk menampilkan data -->
                    <div class="data-container">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{ url('admin/mutasisekolah') }}" class="btn btn-success back-button"><i class="fa fa-arrow-left"></i></a>
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
                                    <td>{{ $mutasisekolah->nama }}</td>
                                </tr>
                                <tr>
                                    <td><strong>NIP:</strong></td>
                                    <td>{{ $mutasisekolah->nip }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Alamat:</strong></td>
                                    <td>{{ $mutasisekolah->alamat }}</td>
                                </tr>
                                <tr>
                                    <td><strong>No. HP/WA:</strong></td>
                                    <td>{{ $mutasisekolah->no_hp }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Status:</strong></td>
                                    <!-- Badge status -->
                                    <td>
                                        @if($mutasisekolah->status == 'Diproses')
                                        <span class="badge badge-warning">{{$mutasisekolah->status}}</span>
                                        @elseif($mutasisekolah->status == 'Diterima')
                                        <span class="badge badge-success">{{$mutasisekolah->status}}</span>
                                        @elseif($mutasisekolah->status == 'Ditolak')
                                        <span class="badge badge-danger">{{$mutasisekolah->status}}</span>
                                        @else
                                        {{$mutasisekolah->status}}
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <hr class="data-divider">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- Kolom untuk asal -->
                    <div class="data-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header bg-success text-white">
                                        <h5 class="mb-0">Asal Instansi</h5>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped mb-0">
                                            <tbody>
                                                <tr>
                                                    <td><b>{{ $mutasisekolah->asal }}</b></td>
                                                </tr>
                                                <!-- Tambahkan informasi asal lainnya sesuai kebutuhan -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Kolom untuk tujuan -->
                    <div class="data-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header bg-success text-white">
                                        <h5 class="mb-0">Instansi Tujuan</h5>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped mb-0">
                                            <tbody>
                                                <tr>
                                                    <td><b>{{ $mutasisekolah->tujuan }}</b></td>
                                                </tr>
                                                <!-- Tambahkan informasi tujuan lainnya sesuai kebutuhan -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <hr class="data-divider">
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Surat Persetujuan Mutasi</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 1)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/mutasi_sekolah/spm/$mutasisekolah->spm") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 1
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Surat Usul Mutasi</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 2)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/mutasi_sekolah/sum/$mutasisekolah->sum") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 2
                        </button>
                    </div>

                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Surat Permohonan Pindah</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 3)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/mutasi_sekolah/spp/$mutasisekolah->spp") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 3
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Surat Rekomendasi Dinas Pendidikan</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 4)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/mutasi_sekolah/rkdp/$mutasisekolah->rkdp") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 4
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Surat Pernyataan Dari Instansi</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 5)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/mutasi_sekolah/spdi/$mutasisekolah->spdi") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 5
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>SP Tidak Menjalani Tugas Belajar</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 6)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/mutasi_sekolah/spstmtb/$mutasisekolah->spstmtb") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 6
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Surat Keputusan Jabatan Terakhir </b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 7)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/mutasi_sekolah/skjt/$mutasisekolah->skjt") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 7
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Surat Keputusan CPNS/PNS</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 8)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/mutasi_sekolah/sk_pns/$mutasisekolah->sk_pns") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 8
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>SKP 2 Tahun Terakhir </b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 9)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/mutasi_sekolah/skp/$mutasisekolah->skp") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 9
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Surat Keterangan Bebas Temuan</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 10)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/mutasi_sekolah/skbt/$mutasisekolah->skbt") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 10
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Alasan Pindah </b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 11)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/mutasi_sekolah/alasan/$mutasisekolah->alasan") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 11
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
                        @if ($mutasisekolah->status == 'Diproses')
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">Pesan Verifikasi</h5>
                        </div>
                        <form id="pesanForm" action="{{ url('admin/mutasisekolah/'.$mutasisekolah->id) }}" method="post" enctype="multipart/form-data" class="pesan-form">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id_pegawai" value="{{ $mutasisekolah->id_pegawai }}">
                            <input type="hidden" name="nama" value="{{ $mutasisekolah->nama }}">
                            <input type="hidden" name="nip" value="{{ $mutasisekolah->nip }}">
                            <input type="hidden" name="no_hp" value="{{ $mutasisekolah->no_hp }}">
                            <input type="hidden" name="alamat" value="{{ $mutasisekolah->alamat }}">
                            <input type="hidden" name="asal" value="{{ $mutasisekolah->asal }}">
                            <input type="hidden" name="tujuan" value="{{ $mutasisekolah->tujuan }}">
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
                        @if ($mutasisekolah->status != 'Diproses')
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">Pesan Verifikasi</h5>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <table class="table table-striped mb-0">
                                        <tbody>
                                            <tr>
                                                <td><b>{{ $mutasisekolah->pesan }}</b></td>
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