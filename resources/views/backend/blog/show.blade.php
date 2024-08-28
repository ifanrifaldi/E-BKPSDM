@extends('template.admin')
@section('content')
<div class="container-fluid">
    <div class="card card-solid" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="card-title mb-0"><b>Judul: </b>{{ $blog->judul }}</h3>
                <a href="{{ url('admin/blog') }}" class="btn btn-success">
                    <i class="fa fa-arrow-left"></i> Kembali
                </a>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 mb-4">
                    <div class="image-container" style="position: relative; width: 100%; padding-top: 75%; overflow: hidden; border-radius: 15px;">
                        <img src="{{ url("public/$blog->gambar") }}" alt="Blog Image" class="img-fluid" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="p-3" style="border-radius: 15px; background: #f9f9f9;">
                        <h5><strong>Nama Penulis:</strong> {{ $blog->nama_penulis }}</h5>
                        <hr>
                        <h4>Isi Berita</h4>
                        <div class="bg-light p-3 rounded" style="max-height: 400px; overflow-y: auto;">
                            <p>{!! nl2br($blog->isi) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional custom styles for better appearance -->
<style>
    @media (max-width: 768px) {
        .image-container {
            padding-top: 100%; /* Adjust the padding ratio for mobile screens */
        }
        .card-body .d-flex {
            flex-direction: column;
            align-items: flex-start;
        }
        .card-body .btn-primary {
            margin-top: 15px;
        }
    }
</style>
@endsection
