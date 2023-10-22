<nav class="navbar navbar-expand-lg bg-danger mb-4">
    <div class="container">
      <a class="navbar-brand text-white" href="/dashboard">ISPP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="/dashboard">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Master
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/masterTabel">Tabel</a></li>
              <li><a class="dropdown-item" href="/masterPegawai">Pegawai</a></li>
            </ul>
          </li>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Transaksi
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Data Kehadiran</a></li>
              <li><a class="dropdown-item" href="#">Tidak Hadir</a></li>
              <li><a class="dropdown-item" href="#">Lembur</a></li>
            </ul>
          </li> --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Laporan
            </a>
            <ul class="dropdown-menu">
              {{-- <li><a class="dropdown-item" href="#">Kehadiran</a></li>
              <li><a class="dropdown-item" href="#">Tunjangan</a></li> --}}
              <li><a class="dropdown-item" href="/laporangaji">Gaji</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Utility
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">User</a></li>
              <li><a class="dropdown-item" href="#">Ubah NIP</a></li>
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome: {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/profile"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile</a></li>
                  <div class="dropdown-divider"></div>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout</a></li>
                </ul>
              </li>
        </ul>
      </div>
    </div>
  </nav>