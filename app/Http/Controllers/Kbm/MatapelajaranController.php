<?php

namespace App\Http\Controllers\Kbm;

use App\Http\Controllers\Controller;
use App\Models\Matapelajaran;
use Illuminate\Http\Request;

class MatapelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matapelajaran = Matapelajaran::orderBy('nama_pelajaran','ASC')->get();

        return view('kbm.matapelajaran.index', compact('matapelajaran'));
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
        Matapelajaran::create($request->all());

        return back()->with('ds','Mata Pelajaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matapelajaran  $matapelajaran
     * @return \Illuminate\Http\Response
     */
    public function show(Matapelajaran $matapelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matapelajaran  $matapelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Matapelajaran $matapelajaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matapelajaran  $matapelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Matapelajaran::where('id',$request->id)->update([
            'nama_pelajaran' => $request->nama_pelajaran
        ]);
        
        return back()->with('ds','Mata Pelajaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matapelajaran  $matapelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matapelajaran $matapelajaran)
    {
        //
    }
}
