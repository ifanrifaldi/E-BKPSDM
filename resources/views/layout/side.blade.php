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
                    <a href="{{ url('pegawai') }}" class="nav-link {{ checkRouteActive('pegawai') }}" style="position: relative; display: flex; align-items: center;">
                        <div class="active-icon-border {{ checkRouteActive('pegawai') }}"></div> <!-- Letakkan border di bawah ikon -->
                        <p style="margin: 0;">Dashboard</p>
                        <i class="nav-icon fas fa-home" style="margin-left: auto; z-index: 2;"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('pegawai/mutasiinstansi') }}" class="nav-link {{ request()->is('pegawai/mutasiinstansi*') ? 'active' : '' }}" style="position: relative; display: flex; align-items: center;">
                        <div class="active-icon-border {{ request()->is('pegawai/mutasiinstansi*') ? 'active' : '' }}"></div> <!-- Letakkan border di bawah ikon -->
                        <p style="margin: 0;">Mutasi Antar Instansi</p>
                        <i class="nav-icon fa fa-exchange-alt fa-lg" style="margin-left: auto; z-index: 2;"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('pegawai/mutasisekolah') }}" class="nav-link {{ request()->is('pegawai/mutasisekolah*') ? 'active' : '' }}" style="position: relative; display: flex; align-items: center;">
                        <div class="active-icon-border {{ request()->is('pegawai/mutasisekolah*') ? 'active' : '' }}"></div> <!-- Letakkan border di bawah ikon -->
                        <p style="margin: 0;">Mutasi Antar Sekolah</p>
                        <i class="nav-icon fa fa-exchange-alt fa-lg" style="margin-left: auto; z-index: 2;"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('pegawai/mutasimasuk') }}" class="nav-link {{ request()->is('pegawai/mutasimasuk*') ? 'active' : '' }}" style="position: relative; display: flex; align-items: center;">
                        <div class="active-icon-border {{ request()->is('pegawai/mutasimasuk*') ? 'active' : '' }}"></div> <!-- Letakkan border di bawah ikon -->
                        <p style="margin: 0;">Mutasi Masuk Ketapang</p>
                        <i class="nav-icon fa fa-exchange-alt fa-lg" style="margin-left: auto; z-index: 2;"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('pegawai/mutasikeluar') }}" class="nav-link {{ request()->is('pegawai/mutasikeluar*') ? 'active' : '' }}" style="position: relative; display: flex; align-items: center;">
                        <div class="active-icon-border {{ request()->is('pegawai/mutasikeluar*') ? 'active' : '' }}"></div> <!-- Letakkan border di bawah ikon -->
                        <p style="margin: 0;">Mutasi Keluar Ketapang</p>
                        <i class="nav-icon fa fa-exchange-alt fa-lg" style="margin-left: auto; z-index: 2;"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('pegawai/pensiundizur') }}" class="nav-link {{ request()->is('pegawai/pensiundizu*') ? 'active' : '' }}" style="position: relative; display: flex; align-items: center;">
                        <div class="active-icon-border {{ request()->is('pegawai/pensiundizur*') ? 'active' : '' }}"></div> <!-- Letakkan border di bawah ikon -->
                        <p style="margin: 0;">Pensiun Dini & Uzur </p>
                        <i class="nav-icon fa fa-user-alt fa-lg" style="margin-left: auto; z-index: 2;"></i>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('pegawai/pensiunbujaduya') }}" class="nav-link {{ request()->is('pegawai/pensiunbujaduya*') ? 'active' : '' }}" style="position: relative; display: flex; align-items: center;">
                        <div class="active-icon-border {{ request()->is('pegawai/pensiunbujaduya*') ? 'active' : '' }}"></div> <!-- Letakkan border di bawah ikon -->
                        <p style="margin: 0;">Pensiun Bujaduya</p>
                        <i class="nav-icon fa fa-user-alt fa-lg" style="margin-left: auto; z-index: 2;"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('pegawai/pegawai') }}" class="nav-link {{ request()->is('pegawai/pegawai*') ? 'active' : '' }}" style="position: relative; display: flex; align-items: center;">
                        <div class="active-icon-border {{ request()->is('pegawai/pegawai*') ? 'active' : '' }}"></div> <!-- Letakkan border di bawah ikon -->
                        <p style="margin: 0;">Profil Pegawai</p>
                        <i class="nav-icon fa fa-cog fa-lg" style="margin-left: auto; z-index: 2;"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('pegawai/pengaduan') }}" class="nav-link {{ request()->is('pegawai/pengaduan*') ? 'active' : '' }}" style="position: relative; display: flex; align-items: center;">
                        <div class="active-icon-border {{ request()->is('pegawai/pegawai*') ? 'active' : '' }}"></div> <!-- Letakkan border di bawah ikon -->
                        <p style="margin: 0;">Pengaduan</p>
                        <i class="nav-icon fa fa-bullhorn fa-lg" style="margin-left: auto; z-index: 2;"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('logout') }}" id="logoutBtn" class="nav-link" style="position: relative; display: flex; align-items: center;">
                        <div class="active-icon-border {{ request()->is('pegawai/pegawai*') ? 'active' : '' }}"></div>
                        <p style="margin: 0;">Logout</p>
                        <i class="nav-icon fas fa-power-off fa-lg" style="margin-left: auto; z-index: 2;"></i>
                    </a>
                </li>


            </ul>
        </nav>

    </div>


</aside>



@push('styles')
<style>
    .nav-link {
        position: relative;
        display: inline-flex;
        align-items: center;
    }

    .active-icon-border {
        position: absolute;
        width: 28px;
        /* Sesuaikan ukuran border sesuai dengan kebutuhan */
        height: 28px;
        /* Sesuaikan ukuran border sesuai dengan kebutuhan */
        background-color: rgb(204, 204, 204);
        /* Warna dan ketebalan border yang diinginkan */
        border-radius: 3px;
        /* Atur sesuai dengan desain yang diinginkan */
        top: 50%;
        left: calc(100% - 46px);
        /* Mengatur posisi kotak berada di sebelah kanan ikon */
        transform: translateY(-50%);
        pointer-events: none;
        z-index: 1;
        /* Mencegah kotak dari merespons interaksi mouse */
    }

    .nav-link.active .active-icon-border {
        background-color: rgb(34, 142, 59);
        /* Warna border yang aktif */
    }
</style>
@endpush


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
