<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{asset('sb-admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{asset('sb-admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container">
          <a class="navbar-brand text-white" href="#">ISSP</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Master
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="#">Tabel</a></li>
                  <li><a class="dropdown-item" href="#">Unit Kerja</a></li>
                  <li><a class="dropdown-item" href="#">Pegawai</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Transaksi
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="#">Data Kehadiran</a></li>
                  <li><a class="dropdown-item" href="#">Tidak Hadir</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Laporan
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="#">Kehadiran</a></li>
                  <li><a class="dropdown-item" href="#">Tunjangan</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Utility
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Users</a></li>
                  <li><a class="dropdown-item" href="#">Ubah NIP</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Konfigurasi</a>
              </li>
             
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Login</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>


      <div class="container py-4">
        
      </div>

    
    
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

      <script src="{{asset('sb-admin/vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('sb-admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
      <script src="{{asset('sb-admin/js/sb-admin-2.min.js')}}"></script>
      <script src="{{asset('sb-admin/vendor/chart.js/Chart.min.js')}}"></script>
      <script src="{{asset('sb-admin/js/demo/chart-area-demo.js')}}"></script>
      <script src="{{asset('sb-admin/js/demo/chart-pie-demo.js')}}"></script>
    </body>
</html>
