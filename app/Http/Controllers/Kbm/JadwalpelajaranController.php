<?php

namespace App\Http\Controllers\Kbm;

use App\Http\Controllers\Controller;
use App\Models\Jadwalkelas;
use App\Models\Jadwalpelajaran;
use App\Models\Kelas;
use App\Models\Matapelajaran;
use App\Models\Pegawai;
use App\Models\Tahunajaran;
use DateTime;
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
        $datapegawai            = Pegawai::where('jabatan','tenaga pengajar')->get();
        // cek 
        $pegawai            = [];
        foreach ($datapegawai as $key) {
            $cekjadwalpelajaran = Jadwalpelajaran::where('pegawai_id',$key->id)->first();
            if (!$cekjadwalpelajaran) {
                $pegawai[] = $key; 
            }
        }
        $matapelajaran      = Matapelajaran::all();
        $tahunajaran        = Tahunajaran::where('status_tahun_ajaran','aktif')->first();
        return view('kbm.jadwalpelajaran.index', compact('jadwalpelajaran','pegawai','matapelajaran','tahunajaran'));
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
        $jadwal = [];
        $hari   = sis_namahari();
        foreach ($hari as $key) {
            $jadwal[$key] = Jadwalkelas::where('jadwalpelajaran_id',$jadwalpelajaran->id)->where('hari',$key)->get();
        }
        $lamajam    = Jadwalkelas::where('jadwalpelajaran_id',$jadwalpelajaran->id)->sum('lama');
        $kelas  = Kelas::all();
        return view('kbm.jadwalpelajaran.show', compact('jadwalpelajaran','jadwal','matapelajaran','kelas','lamajam'));
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
        $jadwalpelajaran->delete();

        return back()->with('dd','Jadwal Pelajaran');
    }
}
