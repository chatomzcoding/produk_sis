<?php

namespace App\Http\Controllers\Kbm;

use App\Http\Controllers\Controller;
use App\Models\Jadwalkelas;
use Illuminate\Http\Request;

class JadwalkelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Jadwalkelas::create([
            'kelas_id' => $request->kelas_id,
            'jadwalpelajaran_id' => $request->jadwalpelajaran_id,
            'hari' => $request->hari,
            'jam' => $request->jam_awal.'-'.$request->jam_akhir,
        ]);
        return back()->with('ds','Jadwal kelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwalkelas  $jadwalkelas
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwalkelas $jadwalkelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwalkelas  $jadwalkelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwalkelas $jadwalkelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwalkelas  $jadwalkelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwalkelas $jadwalkelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwalkelas  $jadwalkelas
     * @return \Illuminate\Http\Response
     */

    public function destroy($jadwalkelas)
    {
        Jadwalkelas::find($jadwalkelas)->delete();

        return back()->with('dd','Jadwal kelas');

    }
}
