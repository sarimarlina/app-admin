@extends('dashboard.layouts.main')

@section('container')
    <div class="row">
        <div class="col-lg-12">
            <div class="waktuKerja" id="waktuKerja">
                <div class="card">
                    <div class="card-header"><h4 class="p-0 m-0">Form Tambah Gaji</h4></div>
                    <div class="card-body">
                        <form action="/storeGaji" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="masukan nama">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nip" class="form-label">NIP</label>
                                        <input type="text" class="form-control" name="nip" id="nip" placeholder="masukan nip">
                                    </div>
                                    <div class="mb-3">
                                        <label for="persen" class="form-label">Persen</label>
                                        <input type="text" class="form-control" name="persen" id="persen" placeholder="masukan persen">
                                    </div>
                                  
                                    <div class="mb-3">
                                        <label for="gaji_dasar" class="form-label">Gaji Dasar</label>
                                        <input type="text" class="form-control" name="gaji_dasar" id="gaji_dasar" placeholder="masukan gaji dasar">
                                    </div>
                                    <div class="mb-3">
                                        <label for="tunjangan_makan" class="form-label">Tunjangan Makan</label>
                                        <input type="text" class="form-control" name="tunjangan_makan" id="tunjangan_makan" placeholder="masukan tunjangan makan">
                                    </div>
                                    <div class="mb-3">
                                        <label for="tunjangan_transportasi" class="form-label">Tunjangan Transaportasi</label>
                                        <input type="text" class="form-control" name="tunjangan_transportasi" id="tunjangan_transportasi" placeholder="masukan tunjangan transportasi">
                                    </div>
                                    <div class="mb-3">
                                        <label for="tunjangan_kesehatan" class="form-label">Tunjangan Kesehatan</label>
                                        <input type="text" class="form-control" name="tunjangan_kesehatan" id="tunjangan_kesehatan" placeholder="masukan tunjangan kesehatan">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="total_tunjangan" class="form-label">Total Tunjangan</label>
                                        <input type="text" class="form-control" id="total_tunjangan" name="total_tunjangan" placeholder="masukan total tunjangan">
                                    </div>
                                    <div class="mb-3">
                                        <label for="gaji_bruto" class="form-label">Gaji Bruto</label>
                                        <input type="text" class="form-control" name="gaji_bruto" id="gaji_bruto" placeholder="masukan gaji bruto">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pajak" class="form-label">Pajak</label>
                                        <input type="text" class="form-control" name="pajak" id="pajak" placeholder="masukan pajak">
                                    </div>
                                    <div class="mb-3">
                                        <label for="gaji_bersih" class="form-label">Gaji Bersih</label>
                                        <input type="text" class="form-control" name="gaji_bersih" id="gaji_bersih" placeholder="masukan gaji bersih">
                                    </div>
                                    <div class="mb-3">
                                        <label for="golongan" class="form-label">Golongan</label>
                                        <select class="form-select" aria-label="Default select example" name="golongan">
                                            <option selected>-Pilih Golongan-</option>
                                            <option value="Golongan 1">Golongan 1</option>
                                            <option value="Golongan 2">Golongan 2</option>
                                            <option value="Golongan 3">Golongan 3</option>
                                          </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="besaran_tunjangan" class="form-label">Gaji Besaran Tunjangan</label>
                                        <input type="text" class="form-control" name="besaran_tunjangan" id="besaran_tunjangan" placeholder="masukan besaran tunjangan">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary w-100">Tambah Data Gaji</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
@endsection