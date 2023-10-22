@extends('dashboard.layouts.main')

@section('container')
    <div class="row">
        <div class="col-lg-12">
            <div class="waktuKerja" id="waktuKerja">
                <div class="card">
                    <div class="card-header"><h4 class="p-0 m-0">Form Tambah Pegawai</h4></div>
                    <div class="card-body">
                        <form action="/storePegawai" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="masukan nama">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nip" class="form-label">NIP</label>
                                        <input type="text" class="form-control" name="nip" id="nip" placeholder="masukan nip">
                                    </div>
                                    <div class="mb-3">
                                        <label for="jabatan" class="form-label">Jabatan</label>
                                        <select class="form-select" aria-label="Default select example" name="jabatan">
                                            <option selected>-Pilih Jabatan-</option>
                                            <option value="Golongan 1">Golongan 1</option>
                                            <option value="Golongan 2">Golongan 2</option>
                                            <option value="Golongan 3">Golongan 3</option>
                                          </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tgl_mulai_tugas" class="form-label">Tanggal Mulai Tugas</label>
                                        <input type="date" class="form-control" name="tgl_mulai_tugas" id="tgl_mulai_tugas">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="masukan email">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary w-100">Tambah Data Pegawai</button>
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
@endsection