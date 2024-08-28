@extends('template.admin')
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
        background-color: #6c757d; /* Warna latar abu-abu untuk Secondary */
        color: #fff; /* Warna teks putih */
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


   /* css untuk tampilkan gambar */

    .img-thumbnail {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
        cursor: pointer;
        transition: transform 0.2s ease-in-out; /* Efek transisi ketika gambar diperbesar */
    }

    .img-thumbnail:hover {
        transform: scale(1.05); /* Gambar sedikit membesar saat dihover */
    }

    .img-button {
        position: relative;
        display: inline-block;
        overflow: hidden;
        border-radius: 50%; /* Membuat tombol menjadi lingkaran */
        background-color: #007bff; /* Warna latar belakang tombol */
        color: #fff;
        text-align: center;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-top: 5px; /* Jarak antara tombol dan gambar */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .img-button:hover {
        background-color: #0056b3; /* Warna latar belakang tombol saat dihover */
    }

    .img-button .fa {
        font-size: 20px; /* Ukuran ikon */
        position: relative;
        top: 50%; /* Posisi vertikal ikon */
        transform: translateY(-50%);
    }

    /* Style untuk modal */
    .modal {
        display: none; /* Modal tidak ditampilkan secara default */
        position: fixed;
        z-index: 9999; /* Z-index tinggi agar modal muncul di atas konten lain */
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7); /* Warna latar belakang semi-transparan */
    }

    .modal-content {
        margin: auto;
        display: block;
        width: 80%; /* Lebar modal */
        max-width: 800px; /* Lebar maksimum */
        max-height: 80%; /* Tinggi maksimum */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.2s ease-in-out; /* Efek transisi */
    }

    .close {
        color: #ccc;
        font-size: 30px;
        font-weight: bold;
        position: absolute;
        top: 10px;
        right: 25px;
        transition: color 0.3s ease;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .modal-content {
            width: 90%; /* Lebar modal pada layar kecil */
        }
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card" style="background-color: white; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="card-header d-flex justify-content-between align-items-center" style="border-radius: 15px 15px 0 0;  background: linear-gradient(to right, #28A745, #DEE9DE, #28A745, #DEE9DE);">
                    <h3 class="card-title m-0" style="font-weight: bold; color: #FFFFFF;">Buku Tamu</h3>
                    <a href="{{ url('admin/bukutamu/create') }}" class="btn btn-success ml-auto">
                        <span class="fa fa-plus"></span>
                    </a>
                </div>
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr style="background-color: #f8f9fa;">
                                <th class="text-center" style="width: 5%;">No</th>
                                <th class="text-center" style="width: 15%;">Aksi</th>
                                <th class="text-center" style="width: 20%;">Nama</th>
                                <th class="text-center" style="width: 20%;">Asal</th>
                                <th class="text-center" style="width: 20%;">Keperluan</th>
                                <th class="text-center" style="width: 20%;">Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_bukutamu as $bukutamu)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">
                                    <div class="crud-buttons">
                                        <!-- <a href="{{ url("admin/profil/$bukutamu->id") }}" class="btn btn-secondary" title="View">
                                            <span class="fa fa-eye"></span>
                                        </a> -->
                                        <a class="btn btn-secondary"class="btn btn-primary btn-sm" onclick="openModal('{{ url("public/$bukutamu->foto") }}')">
                                        <span class="fa fa-search-plus"></span>
                                        </a>
                                        <!-- <a href="{{ url("admin/profil/$bukutamu->id/edit") }}" class="btn btn-warning" title="Edit">
                                            <span class="fa fa-edit"></span>
                                        </a> -->
                                        <form action="{{ url('admin/bukutamu', $bukutamu->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" title="Delete" onclick="return confirm('Apakah yakin ingin menghapus?')">
                                                <span class="fa fa-trash"></span>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <td class="text-justify">{{ $bukutamu->nama }}</td>
                                <td class="text-justify">{{ $bukutamu->asal }}</td>
                                <td class="text-justify">{{ $bukutamu->keperluan }}</td>
                                <!-- <td class="text-center">
                                    <img src="{{ url("public/$bukutamu->foto") }}" class="img-fluid" style="max-width: 50%; border-radius: 5px;">
                                </td> -->
                                <td class="text-center">
                                    <!-- Tambahkan tombol untuk memperbesar gambar -->
                                    <!-- <button class="btn btn-primary btn-sm" onclick="openModal('{{ url("public/$bukutamu->foto") }}')">
                                        <span class="fa fa-search-plus"></span> Perbesar
                                    </button> -->
                                    <img src="{{ url("public/$bukutamu->foto") }}" class="img-fluid img-thumbnail" style="border-radius: 5px;" onclick="openModal('{{ url("public/$bukutamu->foto") }}')" alt="Foto Buku Tamu">
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal untuk memperbesar gambar -->
<div id="modalImage" class="modal" onclick="closeModal()">
    <span class="close">&times;</span>
    <img class="modal-content" id="imgModal">
</div>

<script>
    function openModal(imageUrl) {
        var modal = document.getElementById('modalImage');
        var modalImg = document.getElementById('imgModal');
        modal.style.display = "block";
        modalImg.src = imageUrl;
    }

    function closeModal() {
        var modal = document.getElementById('modalImage');
        modal.style.display = "none";
    }
</script>
@endsection