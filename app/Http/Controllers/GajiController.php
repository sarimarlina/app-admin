<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    public function index()
    {
        return view('dashboard.gaji.index', [
            'title' => 'Halaman Gaji',
        ]);
    }
    public function create()
    {
        return view('dashboard.gaji.tambah', [
            'title' => 'Halaman Tambah Gaji',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'nama' => 'required',
                'nip' => 'required',
                'persen' => 'required',
                'gaji_dasar' => 'required',
                'tunjangan_makan' => 'required',
                'tunjangan_transportasi' => 'required',
                'tunjangan_kesehatan' => 'required',
                'total_tunjangan' => 'required',
                'gaji_bruto' => 'required',
                'pajak' => 'required',
                'gaji_bersih' => 'required',
                'golongan' => 'required',
                'besaran_tunjangan' => 'required',
            ]
        );

        // if ($request->golongan)

        Gaji::insert($validatedData);

        return redirect('/laporangaji')->with(['success' => 'Data Gaji Berhasil Disimpan!']);
    }
}
