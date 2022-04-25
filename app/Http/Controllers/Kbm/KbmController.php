<?php

namespace App\Http\Controllers\Kbm;

use App\Http\Controllers\Controller;
use App\Models\Kbm;
use Illuminate\Http\Request;

class KbmController extends Controller
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
        Kbm::create($request->all());

        return back()->with('ds','Siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kbm  $kbm
     * @return \Illuminate\Http\Response
     */
    public function show(Kbm $kbm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kbm  $kbm
     * @return \Illuminate\Http\Response
     */
    public function edit(Kbm $kbm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kbm  $kbm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kbm $kbm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kbm  $kbm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kbm $kbm)
    {
        $kbm->delete();

        return back()->with('dd','Siswa');
    }
}
