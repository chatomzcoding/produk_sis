<?php

namespace App\Http\Controllers\Sekolah;

use App\Http\Controllers\Controller;
use App\Models\Listprasarana;
use Illuminate\Http\Request;

class ListprasaranaController extends Controller
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
        Listprasarana::create($request->all());

        return back()->with('ds','List Prasarana');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Listprasarana  $listprasarana
     * @return \Illuminate\Http\Response
     */
    public function show(Listprasarana $listprasarana)
    {
        return view('sekolah.aset.listprasarana.show', compact('listprasarana'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Listprasarana  $listprasarana
     * @return \Illuminate\Http\Response
     */
    public function edit(Listprasarana $listprasarana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Listprasarana  $listprasarana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Listprasarana::where('id',$request->id)->update([

            'nama_prasarana' => $request->nama_prasarana,
            'tanggal' => $request->tanggal,
            'keterangan_prasarana' => $request->keterangan_prasarana,
        ]);

        return back()->with('du','List Prasarana');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Listprasarana  $listprasarana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listprasarana $listprasarana)
    {
        $listprasarana->delete();

        return back()->with('dd','List Prasarana');
    }
}
