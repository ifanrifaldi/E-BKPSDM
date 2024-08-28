@section('menu')


<li class="nav-item dropdown">
    <a class="dropdown-toggle nav-link"
        data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
        aria-expanded="false">Produk</a>

    <div class="dropdown-menu">
        @foreach ($list_jenis_produk as $jenis_produk)
        <a class="dropdown-item" href="{{ url("produk/$jenis_produk->id") }}">{{ $jenis_produk->nama }}</a>
        @endforeach
    </div>
</li>
@endsection