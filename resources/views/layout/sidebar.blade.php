@php
function checkRouteActive($route)
{
if (Route::current()->uri == $route) {
return 'active';
}
}
@endphp

<aside class="main-sidebar sidebar-light-success elevation-4">

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('public/admin') }}/bkpsdm3.png" class="img" style="width: 80%">
            </div>

        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


                <li class="nav-item">
                    <a href="{{ url('admin') }}" class="nav-link {{checkRouteActive('admin')}}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/bukutamu') }}" class="nav-link {{checkRouteActive('admin/bukutamu')}} {{checkRouteActive('admin/bukutamu/create')}}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Buku Tamu
                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->is('admin/blog*') ? 'active' : '' }} {{ request()->is('admin/mitra*') ? 'active' : '' }} {{ request()->is('admin/profil*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Web Company
                        </p>
                        <i class="fas fa-angle-left right"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/profil') }}" class="nav-link {{checkRouteActive('admin/profil') }}">
                                <i class="nav-icon fas fa-university"></i>
                                <p>
                                    Profil
                                </p>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/blog') }}" class="nav-link {{ request()->is('admin/blog*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Data Berita
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/mitra') }}" class="nav-link {{checkRouteActive('admin/mitra')}}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Data Partner
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->is('admin/mutasi*') ? 'active' : '' }}"">
                        <i class=" nav-icon fas fa-check"></i>
                        <p>
                            Verifikasi Mutasi
                        </p>
                        <i class="fas fa-angle-left right"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/mutasiinstansi') }}" class="nav-link {{ request()->is('admin/mutasiinstansi*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-university"></i>
                                <p>
                                    Antar Instansi
                                    @php
                                    $mutasiInstansiCount = app('App\Http\Controllers\Admin\MutasiInstansiController')->getMutasiInstansiCount();
                                    $mutasiInstansiBadge = session()->get('mutasiinstansi_badge', true); // Default true jika sesi tidak ada
                                    @endphp
                                    @if($mutasiInstansiCount > 0 && $mutasiInstansiBadge)
                                    <span class="badge badge-danger">{{ $mutasiInstansiCount }}</span>
                                    @endif
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/mutasisekolah') }}" class="nav-link {{ request()->is('admin/mutasisekolah*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-school"></i>
                                <p>
                                    Antar Sekolah
                                    @php
                                    $mutasiSekolahCount = app('App\Http\Controllers\Admin\MutasiSekolahController')->getMutasiSekolahCount();
                                    $mutasiSekolahBadge = session()->get('mutasi_sekolah_badge', true); // Default true jika sesi tidak ada
                                    @endphp
                                    @if($mutasiSekolahCount > 0 && $mutasiSekolahBadge)
                                    <span class="badge badge-danger">{{ $mutasiSekolahCount }}</span>
                                    @endif
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/mutasimasuk') }}" class="nav-link {{ request()->is('admin/mutasimasuk*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-sign-in-alt"></i>
                                <p>
                                    Masuk Ketapang
                                    @php
                                    $mutasiMasukCount = app('App\Http\Controllers\Admin\MutasiMasukController')->getMutasiMasukCount();
                                    $mutasiMasukBadge = session()->get('mutasi_masuk_badge', true); // Default true jika sesi tidak ada
                                    @endphp
                                    @if($mutasiMasukCount > 0 && $mutasiMasukBadge)
                                    <span class="badge badge-danger">{{ $mutasiMasukCount }}</span>
                                    @endif
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/mutasikeluar') }}" class="nav-link {{ request()->is('admin/mutasikeluar*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Keluar Ketapang
                                    @php
                                    $mutasiKeluarCount = app('App\Http\Controllers\Admin\MutasiKeluarController')->getMutasiKeluarCount();
                                    $mutasiKeluarBadge = session()->get('mutasi_keluar_badge', true); // Default true jika sesi tidak ada
                                    @endphp
                                    @if($mutasiKeluarCount > 0 && $mutasiKeluarBadge)
                                    <span class="badge badge-danger">{{ $mutasiKeluarCount }}</span>
                                    @endif
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->is('admin/pensiun*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-check"></i>
                        <p>
                            Verifikasi Pensiun
                        </p>
                        <i class="fas fa-angle-left right"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/pensiundizur') }}" class="nav-link {{ request()->is('admin/pensiundizur*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user-clock"></i>
                                <p>
                                    Pensiun Dini & Uzur
                                    @php
                                    $pensiunDizurCount = app('App\Http\Controllers\Admin\PensiunDizurController')->getPensiunDizurCount();
                                    $pensiunDizurBadge = session()->get('pensiun_dizur_badge', true); // Default true jika sesi tidak ada
                                    @endphp
                                    @if($pensiunDizurCount > 0 && $pensiunDizurBadge)
                                    <span class="badge badge-danger">{{ $pensiunDizurCount }}</span>
                                    @endif
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/pensiunbujaduya') }}" class="nav-link {{ request()->is('admin/pensiunbujaduya*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user-clock"></i>
                                <p>
                                    Pensiun Bujaduya
                                    @php
                                    $pensiunBujaduyaCount = app('App\Http\Controllers\Admin\PensiunBujaduyaController')->getPensiunBujaduyaCount();
                                    $pensiunBujaduyaBadge = session()->get('pensiun_bujaduya_badge', true); // Default true jika sesi tidak ada
                                    @endphp
                                    @if($pensiunBujaduyaCount > 0 && $pensiunBujaduyaBadge)
                                    <span class="badge badge-danger">{{ $pensiunBujaduyaCount }}</span>
                                    @endif
                                </p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="{{ url('admin/blog') }}" class="nav-link {{checkRouteActive('admin/blog')}}">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Pensiun Meninggal
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/blog') }}" class="nav-link {{checkRouteActive('admin/blog')}}">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Pindah Dini
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/blog') }}" class="nav-link {{checkRouteActive('admin/blog')}}">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Pensiun Uzur / Sakit
                                </p>
                            </a>
                        </li> -->
                    </ul>
                </li>
                <!-- TANDA BATAS -->

                <!-- <li class="nav-item">
                    <a href="{{ url('admin/jenis-produk') }}" class="nav-link {{checkRouteActive('admin/jenis-produk')}}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Data Jenis Produk
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/produk') }}" class="nav-link {{checkRouteActive('admin/produk')}}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Data Produk
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Prosedur
                        </p>
                        <i class="fas fa-angle-left right"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/prosedur/order') }}" class="nav-link {{checkRouteActive('admin/prosedur/order')}}">
                                <i class="fa fa-check nav-icon"></i>
                                <p>
                                    Prosedur Order
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/prosedur/desain') }}" class="nav-link {{checkRouteActive('admin/prosedur/desain')}}">
                                <i class="fa fa-check nav-icon"></i>
                                <p>
                                    Prosedur Desain
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/prosedur/produksi') }}" class="nav-link {{checkRouteActive('admin/prosedur/produksi')}}">
                                <i class="fa fa-check nav-icon"></i>
                                <p>
                                    Prosedur Produksi
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/galeri') }}" class="nav-link {{checkRouteActive('admin/galeri')}}">
                        <i class="nav-icon fas fa-camera"></i>
                        <p>
                            Data Galeri
                        </p>
                    </a>
                </li> -->

                <!-- TANDA BATAS -->
                <li class="nav-item">
                    <a href="{{ url('admin/admin') }}" class="nav-link {{checkRouteActive('admin/admin')}}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Data Admin
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/pegawai') }}" class="nav-link {{checkRouteActive('admin/pegawai')}}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Data Pegawai
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/prosedurpengajuan') }}" class="nav-link {{ request()->is('admin/prosedurpengajuan*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-puzzle-piece"></i>
                        <p>
                            Data Prosedur
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/pengaduan') }}" class="nav-link {{ request()->is('admin/pengaduan*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-bullhorn"></i>
                        <p>
                            Pengaduan
                            @php
                            $pengaduanCount = app('App\Http\Controllers\Admin\PengaduanController')->getPengaduanCount();
                            $pengaduanBadge = session()->get('pengaduan_badge', true); // Default true jika sesi tidak ada
                            @endphp
                            @if($pengaduanCount > 0 && $pengaduanBadge)
                            <span class="badge badge-danger">{{ $pengaduanCount }}</span>
                            @endif
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('logout') }}" id="logoutBtn"  class="nav-link {{ request()->is('') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-power-off fa-lg"></i> <p>Logout</p>
                    </a>
                </li>


            </ul>
        </nav>

    </div>

</aside>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('logoutBtn').addEventListener('click', function(e) {
            e.preventDefault(); // Mencegah perilaku tautan default

            Swal.fire({
                title: 'Logout',
                text: 'Anda yakin ingin logout?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Logout'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ url('logout') }}";
                }
            });
        });
    });
</script>