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
                    <h3 class="card-title">Data Pengaduan</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <!-- Kolom untuk foto 4x6 -->
                    <div class="photo-container">
                        @if(pathinfo($pengaduan->bukti, PATHINFO_EXTENSION) === 'pdf')
                        <!-- Jika file adalah PDF -->
                        <embed src="{{ url("public/app/pengaduan/bukti/$pengaduan->bukti") }}" type="application/pdf" width="100%" height="400px">
                        @else
                        <!-- Jika file adalah gambar -->
                        <img src="{{ url("public/app/pengaduan/bukti/$pengaduan->bukti") }}" alt="Foto" class="img-fluid">
                        @endif
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <!-- Kolom untuk menampilkan data -->
                    <div class="data-container">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{ url('admin/pengaduan') }}" class="btn btn-success back-button"><i class="fa fa-arrow-left"></i></a>
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
                                    <td>{{ $pengaduan->nama }}</td>
                                </tr>
                                <tr>
                                    <td><strong>NIP:</strong></td>
                                    <td>{{ $pengaduan->nip }}</td>
                                </tr>
                                <tr>
                                    <td><strong>No. HP/WA:</strong></td>
                                    <td>{{ $pengaduan->no_hp }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Jenis Pengaduan:</strong></td>
                                    <td>{{ $pengaduan->jenis_pengaduan }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Status:</strong></td>
                                    <!-- Badge status -->
                                    <td>
                                        @if($pengaduan->status == 'Belum Dilihat')
                                        <span class="badge badge-secondary">{{$pengaduan->status}}</span>
                                        @elseif($pengaduan->status == 'Sudah Dilihat')
                                        <span class="badge badge-primary">{{$pengaduan->status}}</span>
                                        @elseif($pengaduan->status == 'Ditolak')
                                        <span class="badge badge-danger">{{$pengaduan->status}}</span>
                                        @else
                                        {{$pengaduan->status}}
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
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">Keterangan</h5>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <table class="table table-striped mb-0">
                                        <tbody>
                                            <tr>
                                                <td><b>{{ $pengaduan->keterangan }}</b></td>
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
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        @if ($pengaduan->status == 'Belum Dilihat')
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">Pesan Verifikasi</h5>
                        </div>
                        <form id="pesanForm" action="{{ url('admin/pengaduan/'.$pengaduan->id) }}" method="post" enctype="multipart/form-data" class="pesan-form">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id_pegawai" value="{{ $pengaduan->id_pegawai }}">
                            <input type="hidden" name="nama" value="{{ $pengaduan->nama }}">
                            <input type="hidden" name="nip" value="{{ $pengaduan->nip }}">
                            <input type="hidden" name="no_hp" value="{{ $pengaduan->no_hp }}">
                            <input type="hidden" name="keterangan" value="{{ $pengaduan->keterangan }}">
                            <input type="hidden" name="jenis_pengaduan" value="{{ $pengaduan->jenis_pengaduan }}">
                            <input type="hidden" name="status" value="Ditolak">

                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="pesan">Pesan:</label>
                                        <input type="text" class="form-control" id="pesan" name="pesan" placeholder="Masukkan pesan">
                                    </div>

                                    <div class="form-group d-flex justify-content-end">
                                        <!-- <button type="button" class="btn btn-danger mr-2" onclick="confirmReject()">
                                            <i class="fas fa-times-circle mr-1"></i> Ditolak
                                        </button> -->
                                        <button type="button" class="btn btn-success mr-2" onclick="confirmAccept()" >
                                            <i class="fas fa-check-circle mr-1"></i> Sudah Dilihat
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @endif
                        @if ($pengaduan->status != 'Belum Dilihat')
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">Pesan Verifikasi</h5>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <table class="table table-striped mb-0">
                                        <tbody>
                                            <tr>
                                                <td><b>{{ $pengaduan->pesan }}</b></td>
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
            } else if (status === 'Sudah Dilihat') {
                pesanValue = 'Terimakasih Sudah Melapor';
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
            submitForm('Sudah Dilihat');
        }
    }
</script>
@endsection