@extends('dashboard.layouts.main')

@section('container')
    <div class="row">
        <div class="col-lg-12">
            <div class="header text-center"><h4>Daftar Laporan Gaji</h4></div>
              <a href="/tambahGaji" class="btn btn-sm btn-primary mb-3">+ Tambah Gaji</a>
              @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
              @endif
              <div class="table-responsive">
              <table class="table">
                <thead class="bg-primary text-white">
                    <tr style="font-size: 13px">
                      <th>No</th>
                      <th>Nama</th>
                      <th>NIP</th>
                      <th>Persen</th>
                      <th>Gaji Dasar</th>
                      <th>Tunjangan Makan</th>
                      <th>Tunjangan Transportasi</th>
                      <th>Tunjangan Kesehatan</th>
                      <th>Total Tunjangan</th>
                      <th>Gaji Bruto</th>
                      <th>Pajak</th>
                      <th>Gaji Bersih</th>
                      <th>Golongan</th>
                      <th>Besaran Tunjangan</th>
                      <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
                      <td>1</td>
                      <td>Jeck Anderson</td>
                      <td>12345678</td>
                      <td>80%</td>
                      <td>2.000.000</td>
                      <td>500.000</td>
                      <td>500.000</td>
                      <td>1.000.000</td>
                      <td>2.000.000</td>
                      <td>50.000</td>
                      <td>4.000.000</td>
                      <td>500.0000</td>
                      <td>Golongan 2</td>
                      <td>500.0000</td>
                      <td>
                          <a href="#" class="badge text-bg-warning text-white">Update</a>
                          <a href="#" class="badge text-bg-danger">Delete</a>
                      </td>
                    </tr>
                </tbody>
            
                </table>
             </div>
          </div>
    </div>
@endsection