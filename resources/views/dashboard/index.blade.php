@extends('dashboard.layouts.main')

@section('container')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<div class="status-data bg-success text-white mb-2">
    <h6 class="mx-3 p-2">Home Status Data</h6>
</div>
<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Jumlah Ijin Harian</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">40</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Jumlah Ijin Per Jam</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">15</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Lembur</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                            Jumlah Cuti</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Informsi Kehadiran</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body mb-4">
                <div class="small">
                    <ul class="list-group mb-4">
                        <li class="list-group-item">Hadir <span class="badge text-bg-danger float-right">4</span></li>
                        <li class="list-group-item">Belum Ada Keterangan <span class="badge text-bg-danger float-right">20</span></li>
                        <li class="list-group-item">Cuti Tahunan <span class="badge text-bg-danger float-right">0</span></li>
                        <li class="list-group-item">Dinas Luar <span class="badge text-bg-danger float-right">2</span></li>
                        <li class="list-group-item">Pulang Sebelum Waktunya <span class="badge text-bg-danger float-right">0</span></li>
                        <li class="list-group-item">Terlambat Masuk <span class="badge text-bg-danger float-right">0</span></li>
                      </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Grafik</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-2 pb-2">
                    <canvas id="myPieChart"></canvas>
                </div>
                <div class="mt-2 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Hadir
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Belum Ada Keterangan
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-info"></i> Cuti Tahunan
                    </span>
                    <span class="mr-2"><br>
                        <i class="fas fa-circle text-info"></i> Pulang Sebelum Waktunya
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-info"></i> Dinas Luar
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-info"></i> Terlambat Masuk
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection