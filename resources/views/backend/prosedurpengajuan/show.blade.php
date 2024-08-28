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
                    <h3 class="card-title">Data Prosedur Pengajuan</h3>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Prosedur Mutasi Antar Instansi</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 1)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/prosedur_pengajuan/instansi/$prosedurpengajuan->instansi") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 1
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Prosedur Mutasi Antar Sekolah</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 2)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/prosedur_pengajuan/sekolah/$prosedurpengajuan->sekolah") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 2
                        </button>
                    </div>

                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Prosedur Mutasi Masuk Ketapang</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 3)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/prosedur_pengajuan/masuk/$prosedurpengajuan->masuk") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 3
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Prosedur Mutasi Keluar Ketapang</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 4)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/prosedur_pengajuan/keluar/$prosedurpengajuan->keluar") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 4
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Prosedur Pensiun Dini & Uzur</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 5)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/prosedur_pengajuan/dizur/$prosedurpengajuan->dizur") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 5
                        </button>
                    </div>
                    <div class="col-md-6">
                        <!-- Card untuk keterangan file -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Prosedur Pensiun BUP, Janda/Duda/Yatim</b></h5>
                                <p class="card-text">(Klik tombol di bawah untuk melihat dokumen 6)</p>
                            </div>
                        </div>
                        <!-- Button untuk menampilkan dokumen -->
                        <button class="btn btn-success pdf-button" onclick="showPDF('{{ url("public/app/prosedur_pengajuan/bujaduya/$prosedurpengajuan->bujaduya") }}')">
                            <i class="fas fa-eye"></i> Lihat Dokumen 6
                        </button>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-md-12">
                <hr class="data-divider">
            </div>
        </div>
    </div>
</div>
<br>
<script>
    function showPDF(pdfUrl) {
        window.open(pdfUrl, '_blank');
    }
</script>
@endsection