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
                    <h3 class="card-title">Data Mutasi Keluar Ketapang</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <!-- Kolom untuk foto 4x6 -->
                    <div class="photo-container">
                        <!-- Gambar foto 4x6 akan ditampilkan di sini -->
                        <!-- Ganti placeholder dengan tag img sesuai dengan foto yang diunggah -->
                        <img src="{{ url("public/app/mutasi_keluar_daerah/foto/$mutasikeluar->foto") }}" alt="Foto 4x6" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <!-- Kolom untuk menampilkan data -->
                    <div class="data-container">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{ url('admin/mutasikeluar') }}" class="btn btn-success back-button"><i class="fa fa-arrow-left"></i></a>
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
                                    <td>{{ $mutasikeluar->nama }}</td>
                                </tr>
                                <tr>
                                    <td><strong>NIP:</strong></td>
                                    <td>{{ $mutasikeluar->nip }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Alamat:</strong></td>
                                    <td>{{ $mutasikeluar->alamat }}</td>
                                </tr>
                                <tr>
                                    <td><strong>No. HP/WA:</strong></td>
                                    <td>{{ $mutasikeluar->no_hp }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Status:</strong></td>
                                    <!-- Badge status -->
                                    <td>
                                        @if($mutasikeluar->status == 'Diproses')
                                        <span class="badge badge-warning">{{$mutasikeluar->status}}</span>
                                        @elseif($mutasikeluar->status == 'Diterima')
                                        <span class="badge badge-success">{{$mutasikeluar->status}}</span>
                                        @elseif($mutasikeluar->status == 'Ditolak')
                                        <span class="badge badge-danger">{{$mutasikeluar->status}}</span>
                                        @else
                                        {{$mutasikeluar->status}}
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
                                                    <td><b>{{ $mutasikeluar->asal }}</b></td>
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
                                                    <td><b>{{ $mutasikeluar->tujuan }}</b></td>
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
                                <h5 class="card-title"><b>Surat Rekomendasi Instansi Asal</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 1)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/mutasi_keluar_daerah/sr/$mutasikeluar->sr") }}')">
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
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/mutasi_keluar_daerah/sum/$mutasikeluar->sum") }}')">
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
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/mutasi_keluar_daerah/spp/$mutasikeluar->spp") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 3
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Surat Pernyataan Dari Instansi</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 4)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/mutasi_keluar_daerah/spdi/$mutasikeluar->spdi") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 4
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>SP Tidak Menjalani Tugas Belajar</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 5)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/mutasi_keluar_daerah/spstmtb/$mutasikeluar->spstmtb") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 5
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Surat Keputusan Jabatan Terakhir </b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 6)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/mutasi_keluar_daerah/skjt/$mutasikeluar->skjt") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 6
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Surat Keputusan CPNS/PNS</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 7)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/mutasi_keluar_daerah/sk_pns/$mutasikeluar->sk_pns") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 7
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>SKP 2 Tahun Terakhir </b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 8)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/mutasi_keluar_daerah/skp/$mutasikeluar->skp") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 8
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Surat Keterangan Bebas Temuan</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 9)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/mutasi_keluar_daerah/skbt/$mutasikeluar->skbt") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 9
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Alasan Pindah </b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 10)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/mutasi_keluar_daerah/alasan/$mutasikeluar->alasan") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 10
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
                        @if ($mutasikeluar->status == 'Diproses')
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">Pesan Verifikasi</h5>
                        </div>
                        <form id="pesanForm" action="{{ url('admin/mutasikeluar/'.$mutasikeluar->id) }}" method="post" enctype="multipart/form-data" class="pesan-form">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id_pegawai" value="{{ $mutasikeluar->id_pegawai }}">
                            <input type="hidden" name="nama" value="{{ $mutasikeluar->nama }}">
                            <input type="hidden" name="nip" value="{{ $mutasikeluar->nip }}">
                            <input type="hidden" name="no_hp" value="{{ $mutasikeluar->no_hp }}">
                            <input type="hidden" name="alamat" value="{{ $mutasikeluar->alamat }}">
                            <input type="hidden" name="asal" value="{{ $mutasikeluar->asal }}">
                            <input type="hidden" name="tujuan" value="{{ $mutasikeluar->tujuan }}">
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
                        @if ($mutasikeluar->status != 'Diproses')
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">Pesan Verifikasi</h5>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <table class="table table-striped mb-0">
                                        <tbody>
                                            <tr>
                                                <td><b>{{ $mutasikeluar->pesan }}</b></td>
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