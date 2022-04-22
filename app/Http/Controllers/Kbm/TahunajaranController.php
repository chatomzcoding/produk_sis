<?php

namespace App\Http\Controllers\Kbm;

use App\Http\Controllers\Controller;
use App\Models\Tahunajaran;
use Illuminate\Http\Request;

class TahunajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tahunajaran = Tahunajaran::all();

        return view('kbm.tahunajaran.index', compact('tahunajaran'));
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
        Tahunajaran::create($request->all());

        return back()->with('ds','Tahun Ajaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tahunajaran  $tahunajaran
     * @return \Illuminate\Http\Response
     */
    public function show(Tahunajaran $tahunajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tahunajaran  $tahunajaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Tahunajaran $tahunajaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tahunajaran  $tahunajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Tahunajaran::where('id',$request->id)->update([
            'nama_tahun_ajaran' => $request->nama_tahun_ajaran
        ]);

        return back()->with('du','Tahun Ajaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tahunajaran  $tahunajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tahunajaran $tahunajaran)
    {
        //
    }
}
