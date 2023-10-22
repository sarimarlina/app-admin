@extends('dashboard.layouts.main')

@section('container')
    <div class="row">
        <div class="col-lg-2">
            @include('dashboard.templates.sidebar')
        </div>
        <div class="col-lg-10">
            <div class="waktuKerja" id="waktuKerja">
                <table class="table">
                    <thead class="bg-primary text-white">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Taggal</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Jam Masuk</th>
                        <th scope="col">Jam Pulang</th>
                        <th scope="col">Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($collection as $row)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $row->nama; }}</td>
                        <td>{{ $row->nip; }}</td>
                        <td>{{ $row->tanggal; }}</td>
                        <td>{{ $row->jabatan; }}</td>
                        <td>{{ $row->jam_masuk; }}</td>
                        <td>{{ $row->jam_pulang; }}</td>
                        <td>{{ $row->keterangan; }}</td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection