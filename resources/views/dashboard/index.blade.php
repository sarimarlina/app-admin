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
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="side text-center">
                            <img src="{{ asset('sb-admin/img/undraw_profile_2.svg') }}" class="text-center" width="60%">
                            <h3>Administrator</h3>
                           
                            <div class="card mt-3">
                                <div class="card-header bg-primary text-white">Saldo Cuti</div>
                                <div class="card-body">
                                    <p class="card-text">Sisa Saldo cuti Tahun 2023</p>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header bg-primary text-white">Informasi Kehadiran</div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Hadir <span class="badge text-bg-danger ms-auto">4</span></li>
                                    <li class="list-group-item">Belum Ada Keterangan <span class="badge text-bg-danger">4</span></li></li>
                                    <li class="list-group-item">Cuti Tahunan <span class="badge text-bg-danger">4</span></li></li>
                                    <li class="list-group-item">Dinas Luar <span class="badge text-bg-danger">4</span></li></li>
                                    <li class="list-group-item">Pulang Sebelum Waktunya <span class="badge text-bg-danger">4</span></li></li>
                                    <li class="list-group-item">Terlambat Masuk <span class="badge text-bg-danger">4</span></li></li>
                                </ul>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="header bg-success p-2 text-white">
                    <span>Home Status Data</span>
                </div>
                <div class="row mt-3">
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Jumlah Izin Harian</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">91</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Jumlah Izin Perjam</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Jumlah Izin Harian</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">91</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Lembur</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">22174</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header bg-primary text-white">Grafik</div>
                    <div class="card-body">
                        <p class="card-text">-</p>
                    </div>
                </div>
               
            </div>
        </div>
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
>>>>>>> 4b3b14d5f31f16a510c03ba5635181924ae08e9b
