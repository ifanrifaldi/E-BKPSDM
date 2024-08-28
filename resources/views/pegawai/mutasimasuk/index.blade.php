@extends('template.pegawai')
@section('content')

<style>
    .crud-buttons {
        display: flex;
        gap: 10px;
        justify-content: center;
        /* Pusatkan tombol di dalam div */
    }

    .crud-buttons a,
    .crud-buttons button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        /* Lebar dan tinggi sama untuk membuat tombol menjadi lingkaran */
        height: 40px;
        font-size: 14px;
        font-weight: bold;
        color: #fff;
        border: none;
        border-radius: 50%;
        /* Mengubah tombol menjadi lingkaran */
        text-decoration: none;
        cursor: pointer;
        transition: all 0.3s ease;
        background-color: #6c757d;
        /* Warna latar abu-abu untuk semua tombol */
        position: relative;
        /* Menambahkan posisi relatif untuk ikon */
    }

    .crud-buttons .btn-secondary {
        background-color: #6c757d;
        /* Warna latar abu-abu untuk Secondary */
        color: #fff;
        /* Warna teks putih */
    }

    .crud-buttons .btn-warning {
        background-color: #ffc107;
        /* Kuning untuk Edit */
    }

    .crud-buttons .btn-danger {
        background-color: #dc3545;
        /* Merah untuk Delete */
    }

    .crud-buttons a .fa,
    .crud-buttons button .fa {
        position: absolute;
        /* Menjadikan ikon posisi absolut */
        top: 50%;
        /* Posisi vertikal di tengah */
        left: 50%;
        /* Posisi horizontal di tengah */
        transform: translate(-50%, -50%);
        /* Geser ikon ke tengah */
    }

    .crud-buttons a:hover,
    .crud-buttons button:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .crud-buttons a:focus,
    .crud-buttons button:focus {
        outline: none;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card" style="background-color: white; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="card-header d-flex justify-content-between align-items-center" style="border-radius: 15px 15px 0 0;  background: linear-gradient(to right, #28A745, #DEE9DE, #28A745, #DEE9DE);">
                    <h3 class="card-title m-0" style="font-weight: bold; color: #FFFFFF;">Data Mutasi Masuk</h3>


                    <a href="{{ url('pegawai/mutasimasuk/create') }}" class="btn btn-success ml-auto"> <span class="fa fa-plus"></span> </a>

                </div>

                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">NIP</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Keterangan</th>
                                <!-- <th class="text-center">Foto</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_mutasimasuk as $mutasimasuk)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">
                                    <div class="crud-buttons">
                                        <a href="{{ url("pegawai/mutasimasuk/$mutasimasuk->id") }}" class="btn btn-secondary" title="View">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        @if($mutasimasuk->status != 'Diterima' && $mutasimasuk->status != 'Ditolak')
                                        <a href="{{ url("pegawai/mutasimasuk/$mutasimasuk->id/edit") }}" class="btn btn-warning" title="Edit">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        <form action="{{ url('pegawai/mutasimasuk', $mutasimasuk->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" title="Delete" onclick="return confirm('Apakah yakin ingin menghapus?')">
                                                <span class="fa fa-trash"></span>
                                            </button>
                                        </form>
                                        @endif

                                    </div>
                                </td>
                                <td class="text-justify">{{$mutasimasuk->nama}}</td>
                                <td class="text-justify">{{$mutasimasuk->nip}}</td>
                                <td class="text-center">
                                    @if($mutasimasuk->status == 'Diproses')
                                    <span class="badge badge-warning">{{$mutasimasuk->status}}</span>
                                    @elseif($mutasimasuk->status == 'Diterima')
                                    <span class="badge badge-success">{{$mutasimasuk->status}}</span>
                                    @elseif($mutasimasuk->status == 'Ditolak')
                                    <span class="badge badge-danger">{{$mutasimasuk->status}}</span>
                                    @else
                                    {{$mutasimasuk->status}}
                                    @endif
                                </td>
                                <td class="text-justify">{{$mutasimasuk->pesan}}</td>
                                <!-- <td class="text-center" style="width: 25%">
                                    <img src="{{ url("public/app/mutasi_masuk_daerah/foto/$mutasimasuk->foto") }}" class="img-responsive" style="width:50%">
                                </td> -->
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection