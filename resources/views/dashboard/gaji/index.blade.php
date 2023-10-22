@extends('dashboard.layouts.main')

@section('container')
    <div class="row">
        <div class="col-lg-12">
            <div class="header text-center"><h3>Halaman Gaji</h3></div>
              <a href="/tambahGaji" class="btn btn-sm btn-primary mb-3">+ Tambah Gaji</a>
              @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
              @endif
              <div class="table-responsive">
              <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Persen</th>
                    <th scope="col">Gaji Dasar</th>
                    <th scope="col">Tunjangan Makan</th>
                    <th scope="col">Tunjangan Transportasi</th>
                    <th scope="col">Tunjangan Kesehatan</th>
                    <th scope="col">Total Tunjangan</th>
                    <th scope="col">Gaji Bruto</th>
                    <th scope="col">Pajak</th>
                    <th scope="col">Gaji Bersih</th>
                    <th scope="col">Golongan</th>
                    <th scope="col">Besaran Tunjangan</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($collection as $row)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $row->nama; }}</td>
                      <td>{{ $row->nip; }}</td>
                      <td>{{ $row->jabatan; }}</td>
                      <td>{{ $row->email; }}</td>
                      <td>{{ $row->tgl_mulai_tugas; }}</td>
                      <td>
                          <a href="" class="badge text-bg-warning text-white">Update</a>
                          <a href="" class="badge text-bg-danger">Delete</a>
                      </td>
                    </tr>
                  @endforeach --}}
                </tbody>
            
                </table>
             </div>
          </div>
    </div>
@endsection