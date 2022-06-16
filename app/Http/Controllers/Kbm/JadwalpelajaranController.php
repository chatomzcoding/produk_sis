<?php

namespace App\Http\Controllers\Kbm;

use App\Http\Controllers\Controller;
use App\Models\Jadwalpelajaran;
use App\Models\Matapelajaran;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class JadwalpelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwalpelajaran    = Jadwalpelajaran::all();
        $pegawai            = Pegawai::all();
        $matapelajaran      = Matapelajaran::all();
        return view('kbm.jadwalpelajaran.index', compact('jadwalpelajaran','pegawai','matapelajaran'));
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
        Jadwalpelajaran::create($request->all());

        return back()->with('ds','Mata Pelajran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwalpelajaran  $jadwalpelajaran
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwalpelajaran $jadwalpelajaran)
    {
        $matapelajaran  = $jadwalpelajaran->matapelajaran;
        $jadwalkelas    = $jadwalpelajaran->jadwalkelas;
        return view('guru.jadwalpelajaran', compact('jadwalpelajaran','matapelajaran','jadwalkelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwalpelajaran  $jadwalpelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwalpelajaran $jadwalpelajaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwalpelajaran  $jadwalpelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Jadwalpelajaran::where('id',$request->id)->update([
            'matapelajaran_id' => $request->matapelajaran_id,
            'pegawai_id' => $request->pegawai_id,
            'lama_jam' => $request->lama_jam,
        ]);
        return back()->with('du','Mata Pelajran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwalpelajaran  $jadwalpelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwalpelajaran $jadwalpelajaran)
    {
        //
    }
}
