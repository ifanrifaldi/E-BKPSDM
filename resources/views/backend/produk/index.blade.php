@extends('template.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                    <a href="{{ url('admin/produk/create') }}" class="btn btn-primary float-right mb-10"> <span
                        class="fa fa-plus"></span> Tambah Data</a>
                    <h3 class="card-title">Data Produk</h3>
                </div>

                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">Nama Produk</th>
                                <th class="text-center">Jenis Produk</th>
                                <th class="text-center">Deskripsi Produk</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_produk as $produk)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{ url("admin/produk/$produk->id") }}" class="btn btn-info"><span
                                                class="fa fa-info"></span> </a>

                                            <a href="{{ url("admin/produk/$produk->id") }}/edit" class="btn btn-warning"><span
                                                class="fa fa-edit"></span> </a>

                                            @include('template.utils.delete', [
                                                'url' => url('admin/produk', $produk->id),
                                            ])
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $produk->nama }}</td>
                                    <td class="text-center">{{ $produk->jenisproduk->nama }}</td>
                                    <td class="text">{!! nl2br ($produk->deskripsi_produk) !!}</td>
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