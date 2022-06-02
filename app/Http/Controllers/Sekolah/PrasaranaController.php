<?php

namespace App\Http\Controllers\Sekolah;

use App\Http\Controllers\Controller;
use App\Models\Prasarana;
use Illuminate\Http\Request;

class PrasaranaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prasarana  = Prasarana::all();

        return view('sekolah.aset.prasarana.index', compact('prasarana'));
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
        Prasarana::create($request->all());

        return back()->with('ds','Prasarana');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prasarana  $prasarana
     * @return \Illuminate\Http\Response
     */
    public function show(Prasarana $prasarana)
    {
        return view('sekolah.aset.prasarana.show', compact('prasarana'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prasarana  $prasarana
     * @return \Illuminate\Http\Response
     */
    public function edit(Prasarana $prasarana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prasarana  $prasarana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Prasarana::where('id',$request->id)->update([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
        ]);

        return back()->with('du','Prasarana');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prasarana  $prasarana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prasarana $prasarana)
    {
        $prasarana->delete();

        return back()->with('dd','Prasarana');
    }
}
