<nav class="main-header navbar navbar-expand navbar-white navbar-light">

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>

  </ul>


  <ul class="navbar-nav ml-auto">


    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <span><b>{{ $user->nama }}</b></span>
        <img src="{{ url("public/$user->foto") }}" alt="Foto {{ ucfirst($userType) }}" class="far fa-user" style="width: 35px; height: 35px; border-radius: 50%;">
      </a>
      <!-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

        <a href="#" class="dropdown-item">
          <i class="fas fa-users mr-2"></i> Profile
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-cog mr-2"></i> Settings
        </a>
        <div class="dropdown-divider"></div>
        <a onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')" href="{{ url('logout') }}" class="dropdown-item">
          <i class="fa fa-arrow-left"></i> Logout
        </a>
        <div class="dropdown-divider"></div>

      </div> -->
    </li>

  </ul>
</nav>