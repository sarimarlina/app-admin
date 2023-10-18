<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{asset('sb-admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('sb-admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-danger">
  <div class="container">
    <a class="navbar-brand text-white" href="#">ISPP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Master</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Transasksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Utinility</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Konfigurasi</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item text-white" href="#">Action</a></li>
            <li><a class="dropdown-item text-white" href="#">Another action</a></li>
            <li><a class="dropdown-item text-white" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
     <ul class="navbar-nav">
     <li class="nav-item">
          <a class="nav-link text-white" href="#">Login</a>
        </li>
      <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item text-white" href="#">Action</a></li>
            <li><a class="dropdown-item text-white" href="#">Another action</a></li>
            <li><a class="dropdown-item text-white" href="#">Something else here</a></li>
          </ul>
        </li> -->
      </ul>
      
    </div>
   
  </div>
</nav>


<div class="container mt-4">
    <div class="row">
        <div class="col-lg-3-refresh justify-content-center">
           <div class="sidebar">
           <img src="{{asset('sb-admin/img/undraw_profile.svg')}}" alt="" width="60%" class="text-center align-items-center">
            <h3 class="text-center">Administrator</h3>
           </div>
        </div>
        <div class="col-lg-9">
            <div class="bg-success p-1 text-white">
            <span>Home>Status Data</span> 
            </div>
            <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-success shadow h-100 py-2">
                      <div class="card-body">
                          <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                      Earnings (Annual)</div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                              </div>
                              <div class="col-auto">
                                  <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

            </div>
        </div>
    </div>
</div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{asset('sb-admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('sb-admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script> <script src="{{asset('sb-admin/js/sb-admin-2.min.js')}}"></script>
    <script src="{{asset('sb-admin/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('sb-admin/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('sb-admin/js/demo/chart-pie-demo.js')}}"></script>
  </body>
</html>