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

    .photo-container img {
        height: 25rem;
    }

    @media (max-width: 768px) {
        .pdf-button {
            display: block;
            margin-bottom: 10px;
            width: 100%;
        }
    }

    .table-success th {
        background-color: #28a745;
        color: #fff;
        text-align: center;
    }

    .center-buttons {
        text-align: center;
    }

    .btn-center {
        margin: 0 5px;
    }

    .table-center td,
    .table-center th {
        text-align: center;
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
                <!-- <div class="col-md-3 order-md-2">
                    <div class="photo-container">
                        <img src="{{ url("public/app/mutasi_instansi/foto/$mutasiinstansi->foto") }}" alt="Foto 4x6" class="img-fluid">
                    </div>
                </div> -->
                <div class="col-md-12 order-md-1">
                    <div class="data-container">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{ url('admin/mutasiinstansi') }}" class="btn btn-success back-button"><i class="fa fa-arrow-left"></i></a>
                            </div>
                        </div>
                        <hr class="data-divider">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="data-heading">Informasi</h5>
                            </div>
                        </div>
                        <table class="table table-striped">
                            <tbody>
                                <!-- Tambahkan input tersembunyi untuk v3 hingga v10 -->
                                <input type="hidden" name="v1_value" value="{{ $mutasiinstansi->v1 }}">
                                <input type="hidden" name="v2_value" value="{{ $mutasiinstansi->v2 }}">
                                <input type="hidden" name="v3_value" value="{{ $mutasiinstansi->v3 }}">
                                <input type="hidden" name="v4_value" value="{{ $mutasiinstansi->v4 }}">
                                <input type="hidden" name="v5_value" value="{{ $mutasiinstansi->v5 }}">
                                <input type="hidden" name="v6_value" value="{{ $mutasiinstansi->v6 }}">
                                <input type="hidden" name="v7_value" value="{{ $mutasiinstansi->v7 }}">
                                <input type="hidden" name="v8_value" value="{{ $mutasiinstansi->v8 }}">
                                <input type="hidden" name="v9_value" value="{{ $mutasiinstansi->v9 }}">
                                <input type="hidden" name="v10_value" value="{{ $mutasiinstansi->v10 }}">

                                <input type="hidden" name="id" value="{{ $mutasiinstansi->id }}">

                                <tr>
                                    <td><strong>Tujuan Mutasi</strong></td>
                                    <td>{{ $mutasiinstansi->tujuan }}</td>
                                </tr>

                                <tr>
                                    <td><strong>Status:</strong></td>
                                    <td>
                                        @if($mutasiinstansi->status == 'Diproses')
                                        <span class="badge badge-warning">{{$mutasiinstansi->status}}</span>
                                        @elseif($mutasiinstansi->status == 'Diterima')
                                        <span class="badge badge-primary">{{$mutasiinstansi->status}}</span>
                                        @elseif($mutasiinstansi->status == 'Ditolak')
                                        <span class="badge badge-danger">{{$mutasiinstansi->status}}</span>
                                        @elseif($mutasiinstansi->status == 'Direvisi')
                                        <span class="badge badge-info">{{$mutasiinstansi->status}}</span>
                                        @elseif($mutasiinstansi->status == 'Diajukan')
                                        <span class="badge badge-success">{{$mutasiinstansi->status}}</span>
                                        @else
                                        {{$mutasiinstansi->status}}
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br>
            <!-- <div class="col-md-12">
                <hr class="data-divider">
            </div> -->

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
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered bg-white table-center">
                        <thead class="table-success">
                            <tr>
                                <th>No</th>
                                <th>Nama Dokumen</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td style="text-align: left;">Surat Persetujuan Mutasi</td>
                                <td class="center-buttons">
                                    <button class="btn btn-secondary btn-center" onclick="showPDF('{{ url('public/app/mutasi_instansi/spm/'.$mutasiinstansi->spm) }}')">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button id="button-check-v1-{{ $mutasiinstansi->id }}" class="btn btn-info btn-center" onclick="updateColumn('v1', 1, '{{ $mutasiinstansi->id }}')">
                                        <i class="fas fa-check-circle"></i>
                                    </button>
                                    <button id="button-x-v1-{{ $mutasiinstansi->id }}" class="btn btn-danger btn-center" onclick="updateColumn('v1', 2, '{{ $mutasiinstansi->id }}')">
                                        <i class="fas fa-times-circle"></i>
                                    </button>
                                </td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td style="text-align: left;">Surat Usul Mutasi</td>
                                <td class="center-buttons">
                                    <button class="btn btn-secondary btn-center" onclick="showPDF('{{ url("public/app/mutasi_instansi/sum/$mutasiinstansi->sum") }}')">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button id="button-check-v2-{{ $mutasiinstansi->id }}" class="btn btn-info btn-center" onclick="updateColumn('v2', 1, '{{ $mutasiinstansi->id }}')">
                                        <i class="fas fa-check-circle"></i>
                                    </button>
                                    <button id="button-x-v2-{{ $mutasiinstansi->id }}" class="btn btn-danger btn-center" onclick="updateColumn('v2', 2, '{{ $mutasiinstansi->id }}')">
                                        <i class="fas fa-times-circle"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td style="text-align: left;">Surat Permohonan Pindah</td>
                                <td class="center-buttons">
                                    <button class="btn btn-secondary btn-center" onclick="showPDF('{{ url("public/app/mutasi_instansi/spp/$mutasiinstansi->spp") }}')">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button id="button-check-v3-{{ $mutasiinstansi->id }}" class="btn btn-info btn-center" onclick="updateColumn('v3', 1, '{{ $mutasiinstansi->id }}')">
                                        <i class="fas fa-check-circle"></i>
                                    </button>
                                    <button id="button-x-v3-{{ $mutasiinstansi->id }}" class="btn btn-danger btn-center" onclick="updateColumn('v3', 2, '{{ $mutasiinstansi->id }}')">
                                        <i class="fas fa-times-circle"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td style="text-align: left;">Surat Pernyataan Dari Instansi</td>
                                <td class="center-buttons">
                                    <button class="btn btn-secondary btn-center" onclick="showPDF('{{ url("public/app/mutasi_instansi/spdi/$mutasiinstansi->spdi") }}')">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button id="button-check-v4-{{ $mutasiinstansi->id }}" class="btn btn-info btn-center" onclick="updateColumn('v4', 1, '{{ $mutasiinstansi->id }}')">
                                        <i class="fas fa-check-circle"></i>
                                    </button>
                                    <button id="button-x-v4-{{ $mutasiinstansi->id }}" class="btn btn-danger btn-center" onclick="updateColumn('v4', 2, '{{ $mutasiinstansi->id }}')">
                                        <i class="fas fa-times-circle"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td style="text-align: left;">SP Tidak Menjalani Tugas Belajar</td>
                                <td class="center-buttons">
                                    <button class="btn btn-secondary btn-center" onclick="showPDF('{{ url("public/app/mutasi_instansi/spstmtb/$mutasiinstansi->spstmtb") }}')">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button id="button-check-v5-{{ $mutasiinstansi->id }}" class="btn btn-info btn-center" onclick="updateColumn('v5', 1, '{{ $mutasiinstansi->id }}')">
                                        <i class="fas fa-check-circle"></i>
                                    </button>
                                    <button id="button-x-v5-{{ $mutasiinstansi->id }}" class="btn btn-danger btn-center" onclick="updateColumn('v5', 2, '{{ $mutasiinstansi->id }}')">
                                        <i class="fas fa-times-circle"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td style="text-align: left;">Surat Keputusan Jabatan Terakhir</td>
                                <td class="center-buttons">
                                    <button class="btn btn-secondary btn-center" onclick="showPDF('{{ url("public/app/mutasi_instansi/skjt/$mutasiinstansi->skjt") }}')">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button id="button-check-v6-{{ $mutasiinstansi->id }}" class="btn btn-info btn-center" onclick="updateColumn('v6', 1, '{{ $mutasiinstansi->id }}')">
                                        <i class="fas fa-check-circle"></i>
                                    </button>
                                    <button id="button-x-v6-{{ $mutasiinstansi->id }}" class="btn btn-danger btn-center" onclick="updateColumn('v6', 2, '{{ $mutasiinstansi->id }}')">
                                        <i class="fas fa-times-circle"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td style="text-align: left;">Surat Keputusan CPNS/PNS</td>
                                <td class="center-buttons">
                                    <button class="btn btn-secondary btn-center" onclick="showPDF('{{ url("public/app/mutasi_instansi/sk_pns/$mutasiinstansi->sk_pns") }}')">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button id="button-check-v7-{{ $mutasiinstansi->id }}" class="btn btn-info btn-center" onclick="updateColumn('v7', 1, '{{ $mutasiinstansi->id }}')">
                                        <i class="fas fa-check-circle"></i>
                                    </button>
                                    <button id="button-x-v7-{{ $mutasiinstansi->id }}" class="btn btn-danger btn-center" onclick="updateColumn('v7', 2, '{{ $mutasiinstansi->id }}')">
                                        <i class="fas fa-times-circle"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td style="text-align: left;">SKP 2 Tahun Terakhir</td>
                                <td class="center-buttons">
                                    <button class="btn btn-secondary btn-center" onclick="showPDF('{{ url("public/app/mutasi_instansi/skp/$mutasiinstansi->skp") }}')">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button id="button-check-v8-{{ $mutasiinstansi->id }}" class="btn btn-info btn-center" onclick="updateColumn('v8', 1, '{{ $mutasiinstansi->id }}')">
                                        <i class="fas fa-check-circle"></i>
                                    </button>
                                    <button id="button-x-v8-{{ $mutasiinstansi->id }}" class="btn btn-danger btn-center" onclick="updateColumn('v8', 2, '{{ $mutasiinstansi->id }}')">
                                        <i class="fas fa-times-circle"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td style="text-align: left;">Surat Keterangan Bebas Temuan</td>
                                <td class="center-buttons">
                                    <button class="btn btn-secondary btn-center" onclick="showPDF('{{ url("public/app/mutasi_instansi/skbt/$mutasiinstansi->skbt") }}')">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button id="button-check-v9-{{ $mutasiinstansi->id }}" class="btn btn-info btn-center" onclick="updateColumn('v9', 1, '{{ $mutasiinstansi->id }}')">
                                        <i class="fas fa-check-circle"></i>
                                    </button>
                                    <button id="button-x-v9-{{ $mutasiinstansi->id }}" class="btn btn-danger btn-center" onclick="updateColumn('v9', 2, '{{ $mutasiinstansi->id }}')">
                                        <i class="fas fa-times-circle"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td style="text-align: left;">Alasan Pindah</td>
                                <td class="center-buttons">
                                    <button class="btn btn-secondary btn-center" onclick="showPDF('{{ url("public/app/mutasi_instansi/alasan/$mutasiinstansi->alasan") }}')">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button id="button-check-v10-{{ $mutasiinstansi->id }}" class="btn btn-info btn-center" onclick="updateColumn('v10', 1, '{{ $mutasiinstansi->id }}')">
                                        <i class="fas fa-check-circle"></i>
                                    </button>
                                    <button id="button-x-v10-{{ $mutasiinstansi->id }}" class="btn btn-danger btn-center" onclick="updateColumn('v10', 2, '{{ $mutasiinstansi->id }}')">
                                        <i class="fas fa-times-circle"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-12">
                <hr class="data-divider">
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        @if ($mutasiinstansi->status == 'Diproses' || $mutasiinstansi->status == 'Diajukan' || $mutasiinstansi->status == 'Direvisi')
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">Pesan Verifikasi</h5>
                        </div>
                        <form id="pesanForm" action="{{ url('admin/mutasiinstansi/'.$mutasiinstansi->id) }}" method="post" enctype="multipart/form-data" class="pesan-form">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id_pegawai" value="{{ $mutasiinstansi->id_pegawai }}">
                            <input type="hidden" name="nama" value="{{ $mutasiinstansi->nama }}">
                            <input type="hidden" name="nip" value="{{ $mutasiinstansi->nip }}">
                            <input type="hidden" name="no_hp" value="{{ $mutasiinstansi->no_hp }}">
                            <input type="hidden" name="alamat" value="{{ $mutasiinstansi->alamat }}">
                            <input type="hidden" name="asal" value="{{ $mutasiinstansi->asal }}">
                            <input type="hidden" name="tujuan" value="{{ $mutasiinstansi->tujuan }}">
                            <input type="hidden" name="status" value="Ditolak">

                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="pesan">Pesan:</label>
                                        <input type="text" class="form-control" id="pesan" name="pesan" placeholder="Masukkan pesan">
                                    </div>
                                    <div class="form-group d-flex justify-content-end">
                                        <button type="button" class="btn btn-warning mr-2" onclick="updateStatus(3)">
                                            <i class="fas fa-spinner mr-1"></i> Diproses
                                        </button>
                                        <button type="button" class="btn btn-info mr-2" onclick="updateStatus(4)">
                                            <i class="fas fa-pencil-alt mr-1"></i> Direvisi
                                        </button>
                                        <button type="button" class="btn btn-danger mr-2" onclick="updateStatus(2)">
                                            <i class="fas fa-times-circle mr-1"></i> Ditolak
                                        </button>
                                        <button type="button" class="btn btn-primary mr-2" onclick="updateStatus(1)">
                                            <i class="fas fa-check-circle mr-1"></i> Diterima
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @endif
                        @if ($mutasiinstansi->status != 'Diajukan')
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">Pesan Verifikasi</h5>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <table class="table table-striped mb-0">
                                        <tbody>
                                            <tr>
                                                <td><b>{{ $mutasiinstansi->pesan }}</b></td>
                                            </tr>
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

    function updateStatus(value) {
        var status, pesanValue;

        switch (value) {
            case 1:
                status = 'Diterima';
                pesanValue = 'Berkas sesuai';
                break;
            case 2:
                status = 'Ditolak';
                pesanValue = 'Berkas tidak sesuai';
                break;
            case 3:
                status = 'Diproses';
                pesanValue = 'Pengajuan sedang di proses';
                break;
            case 4:
                status = 'Direvisi';
                pesanValue = 'Berkas pengajuan di revisi';
                break;
            default:
                console.error('Status value tidak valid');
                return;
        }

        document.getElementById('pesanForm').querySelector('input[name="pesan"]').value = pesanValue;
        document.getElementById('pesanForm').querySelector('input[name="status"]').value = status;

        var confirmation = confirm("Apakah Anda yakin ingin " + (status === 'Diterima' ? 'menerima' : status === 'Ditolak' ? 'menolak' : status.toLowerCase()) + "?");
        if (confirmation) {
            document.getElementById('pesanForm').submit();
        }
    }
</script>

<script>
    // Fungsi untuk memeriksa dan mengatur visibilitas tombol
    function updateButtonVisibility(column, value, id) {
        const buttonCheck = document.getElementById(`button-check-${column}-${id}`);
        const buttonX = document.getElementById(`button-x-${column}-${id}`);

        if (value === 1) {
            buttonCheck.style.display = 'inline-block';
            buttonX.style.display = 'none';
        } else if (value === 2) {
            buttonCheck.style.display = 'none';
            buttonX.style.display = 'inline-block';
        } else {
            buttonCheck.style.display = 'inline-block';
            buttonX.style.display = 'inline-block';
        }
    }

    function updateColumn(column, value, id) {
        console.log('updateColumn called with:', column, value, id);
        const url = '{{ url("admin/mutasiinstansi/updatecolumn") }}'; // Pastikan URL ini benar
        const csrfToken = '{{ csrf_token() }}';

        fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                    column: column,
                    value: value,
                    id: id
                })
            })
            .then(response => {
                if (response.ok) {
                    return response.json();
                }
                return response.text().then(text => {
                    throw new Error(`HTTP error! status: ${response.status}, ${text}`);
                });
            })
            .then(data => {
                if (data.success) {
                    const buttonCheck = document.getElementById(`button-check-${column}-${id}`);
                    const buttonX = document.getElementById(`button-x-${column}-${id}`);

                    if (value === 1) {
                        buttonCheck.innerHTML = '<i class="fas fa-check"></i>';
                        buttonX.style.display = 'none';
                    } else if (value === 2) {
                        buttonX.innerHTML = '<i class="fas fa-times"></i>';
                        buttonCheck.style.display = 'none';
                    }
                } else {
                    alert('Update failed!');
                }
            })
            .catch(error => {
                console.error('Error occurred:', error);
            });
    }

    // Fungsi untuk memeriksa nilai saat halaman dimuat
    document.addEventListener('DOMContentLoaded', function() {
        const columns = ['v1', 'v2', 'v3', 'v4', 'v5', 'v6', 'v7', 'v8', 'v9', 'v10'];
        columns.forEach(column => {
            const value = parseInt(document.querySelector(`input[name="${column}_value"]`).value);
            const id = document.querySelector('input[name="id"]').value;
            updateButtonVisibility(column, value, id);
        });
    });
</script>

@endsection