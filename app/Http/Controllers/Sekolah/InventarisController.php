<?php

namespace App\Http\Controllers\Sekolah;

use App\Http\Controllers\Controller;
use App\Models\Inventaris;
use Illuminate\Http\Request;

class InventarisController extends Controller
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
        Inventaris::create($request->all());

        return back()->with('ds','Inventaris');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function show(Inventaris $inventaris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventaris $inventaris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Inventaris::where('id',$request->id)->update([
            'nama' => $request->nama,
            'nib' => $request->nib,
            'sumber' => $request->sumber,
            'kondisi' => $request->kondisi,
            'fungsi' => $request->fungsi,
            'tgl_pengadaan' => $request->tgl_pengadaan,
            'tahun_pengadaan' => $request->tahun_pengadaan,
            'jumlah' => $request->jumlah,
            'status' => $request->status,
        ]);

        return back()->with('du','Inventaris');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function destroy($inventaris)
    {
        $inventaris = Inventaris::find($inventaris);
        $inventaris->delete();

        return back()->with('dd','Inventaris');
    }
}
