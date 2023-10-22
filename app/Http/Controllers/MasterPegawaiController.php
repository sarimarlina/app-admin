<?php

namespace App\Http\Controllers;

use App\Models\Master_pegawai;
use Illuminate\Http\Request;

class MasterPegawaiController extends Controller
{
    public function index()
    {
        return view('dashboard.pegawai.index', [
            'title' => 'Halaman Pegawai',
            'collection' => Master_pegawai::all()
        ]);
    }
    public function create()
    {
        return view('dashboard.pegawai.tambah', [
            'title' => 'Halaman Pegawai'
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'nama' => 'required',
                'nip' => 'required',
                'jabatan' => 'required',
                'tgl_mulai_tugas' => 'required',
                'email' => 'required',
            ]
        );

        Master_pegawai::insert($validatedData);

        return redirect('/masterPegawai')->with(['success' => 'Data Pegawai Berhasil Disimpan!']);
    }
}
