<?php

namespace App\Http\Controllers\Sekolah;

use App\Http\Controllers\Controller;
use App\Models\Arsippegawai;
use Illuminate\Http\Request;

class ArsippegawaiController extends Controller
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
        $dokumen = self::uploaddokumen($request);

        Arsippegawai::create($dokumen);

        return back()->with('ds','Arsip');
    }

    public function uploaddokumen($request,$arsip=NULL)
    {
        $dokumen    = ['ktp','kk','sk_awal','npwp','karis','skgb','sd','smp','sma','s1','s2','s3','sertifikat','lainnya'];
        $result     = [];
        $result['pegawai_id'] = $request->pegawai_id;
        foreach ($dokumen as $dok) {
            if (isset($request->$dok)) {
                $request->validate([
                    $dok => 'required|mimes:pdf|max:10000',
                ]);
                // menyimpan data file yang diupload ke variabel $file
                $file = $request->file($dok);
                
                $namafile = time()."_".$file->getClientOriginalName();
                $tujuan_upload = 'public/dokumen/arsippegawai';
                // isi dengan nama folder tempat kemana file diupload
                $file->move($tujuan_upload,$namafile);
            } else {
                if (!is_null($arsip)) {
                    $namafile   = $arsip->$dok;
                } else {
                    $namafile   = NULL;
                }
                
            }

            $result[$dok] = $namafile;
        }

        return $result;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Arsippegawai  $arsippegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Arsippegawai $arsippegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Arsippegawai  $arsippegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Arsippegawai $arsippegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Arsippegawai  $arsippegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arsippegawai $arsippegawai)
    {
        $dokumen = self::uploaddokumen($request,$arsippegawai);
        Arsippegawai::where('id',$arsippegawai->id)->update($dokumen);

        return back()->with('du','Arsip Pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Arsippegawai  $arsippegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arsippegawai $arsippegawai)
    {
        //
    }
}
