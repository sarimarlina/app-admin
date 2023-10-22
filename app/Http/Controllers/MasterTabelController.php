<?php

namespace App\Http\Controllers;

use App\Models\MasterTabel;
use App\Models\Waktu_kerja;
use App\Models\WaktuKerja;
use Illuminate\Http\Request;

class MasterTabelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.tabel.index', [
            'title' => 'Tabel Master',
            'collection' => Waktu_kerja::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "cek";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MasterTabel  $masterTabel
     * @return \Illuminate\Http\Response
     */
    public function show(MasterTabel $masterTabel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MasterTabel  $masterTabel
     * @return \Illuminate\Http\Response
     */
    public function edit(MasterTabel $masterTabel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MasterTabel  $masterTabel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasterTabel $masterTabel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MasterTabel  $masterTabel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterTabel $masterTabel)
    {
        //
    }

    public function tambahWaktuKerja()
    {
        return view('dashboard.tabel.tambahWaktuKerja', [
            'title' => 'Tambah Waktu Kerja'
        ]);
    }
    public function insertWaktuKerja(Request $request)
    {
        $validatedData = $request->validate(
            [
                'nama' => 'required',
                'nip' => 'required',
                'jabatan' => 'required',
                'tanggal' => 'required',
                'jam_masuk' => 'required',
                'jam_pulang' => 'required',
                'keterangan' => 'required',
            ]
        );

        Waktu_kerja::insert($validatedData);

        return redirect('/masterTabel')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function statusAbsen()
    {
        return view('dashboard.tabel.statusAbsen', [
            'title' => 'Tabel Status Absen',
            'collection' => Waktu_kerja::all()
        ]);
    }
}
