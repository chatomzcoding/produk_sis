<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sarana;
use Illuminate\Http\Request;

class SaranaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = 'sarana';
        $main = [
            'link' => 'sarana'
        ];
        $sarana     = Sarana::all();
        return view('admin.sarana.index', compact('menu','main','sarana'));
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
        if (isset($request->poto)) {
            $request->validate([
                'poto' => 'required|file|image|mimes:jpeg,png,jpg|max:5000',
            ]);
            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('poto');
            $poto = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'public/img/admin/sarana';
            // isi dengan nama folder tempat kemana file diupload
            $file->move($tujuan_upload,$poto);
        } else {
            $poto  = NULL;
        }

        Sarana::create([
            'nama'  => $request->nama,
            'tahun_pengadaaan'  => $request->tahun_pengadaaan,
            'tgl_pengadaan'  => $request->tgl_pengadaan,
            'kondisi'  => $request->kondisi,
            'fungsi'  => $request->fungsi,
            'status'  => $request->status,
            'poto' => $poto,
        ]);
        
        return back()->with('ds','Galeri');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sarana  $sarana
     * @return \Illuminate\Http\Response
     */
    public function show(Sarana $sarana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sarana  $sarana
     * @return \Illuminate\Http\Response
     */
    public function edit(Sarana $sarana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sarana  $sarana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sarana $sarana)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sarana  $sarana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sarana $sarana)
    {
        //
    }
}
