@extends('dashboard.layouts.main')

@section('container')
    <div class="row">
        <div class="col-lg-2">
            @include('dashboard.templates.sidebar')
        </div>
        <div class="col-lg-10">
            <div class="waktuKerja" id="waktuKerja">
                <div class="card">
                    <div class="card-header"><h5 class="p-0 m-0 text-center">Form Tambah Waktu Kerja</h5></div>
                    <div class="card-body">
                        <form action="/insertWaktuKerja" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="masukan nama" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nip" class="form-label">NIP</label>
                                        <input type="text" class="form-control" name="nip" id="nip" placeholder="masukan nip" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jabatan" class="form-label">Jabatan</label>
                                        <select class="form-select" aria-label="Default select example" name="jabatan" required>
                                            <option selected>-Pilih Jabatan-</option>
                                            <option value="Golongan 1">Golongan 1</option>
                                            <option value="Golongan 2">Golongan 2</option>
                                            <option value="Golongan 3">Golongan 3</option>
                                          </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal" class="form-label">Tanggal</label>
                                        <input type="date" class="form-control" name="tanggal" id="tanggal" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="jam_masuk" class="form-label">Jam Masuk</label>
                                        <input type="text" class="form-control" name="jam_masuk" id="jam_masuk" value="{{ date("h:i:s") }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="jam_pulang" class="form-label">Jam Pulang</label>
                                        <input type="text" class="form-control" name="jam_pulang" id="jam_pulang" value="{{ date("h:i:s") }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="keterangan" class="form-label">Keterangan</label>
                                        <select class="form-select" aria-label="Default select example" name="keterangan" required>
                                            <option selected>-Pilih Keterangan-</option>
                                            <option value="Sakit">Sakit</option>
                                            <option value="Tugas Luar">Tugas Luar</option>
                                            <option value="Perjalanan Dinas">Perjalanan Dinas</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary w-100">+Tambah Data</button>
                                </div>
                            </div>
                            
                            
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection