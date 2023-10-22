@extends('dashboard.layouts.main')

@section('container')
    <div class="row">
        <div class="col-lg-12">
              <a href="/tambahPegawai" class="btn btn-sm btn-primary mb-3">+ Tambah Data</a>
              @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
              @endif
              <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($collection as $row)
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
                  @endforeach
                </tbody>
            </table>
          </div>
    </div>
@endsection