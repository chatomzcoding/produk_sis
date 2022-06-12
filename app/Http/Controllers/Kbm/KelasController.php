<?php

namespace App\Http\Controllers\Kbm;

use App\Http\Controllers\Controller;
use App\Models\Jadwalkelas;
use App\Models\Jadwalpelajaran;
use App\Models\Kelas;
use App\Models\Matapelajaran;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas  = Kelas::orderBy('nama_kelas','ASC')->get();
        $pegawai = Pegawai::where('jabatan','tenaga pengajar')->orderBy('nama_pegawai','ASC')->get();
        return view('kbm.kelas.index', compact('kelas','pegawai'));
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
        Kelas::create($request->all());

        return back()->with('ds','Kelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show($kelas)
    {
        $kelas = Kelas::find($kelas);
        $jadwalpelajaran    = Jadwalpelajaran::all();
        $informasi      = [];
        foreach (sis_namahari() as $key) {
            $jadwal     = [];
            $jadwalkelas = Jadwalkelas::where('kelas_id',$kelas->id)->where('hari',$key)->orderBy('jam')->get();
            foreach ($jadwalkelas as $row) {
                $pelajaran  = Matapelajaran::find($row->jadwalpelajaran->matapelajaran_id);
                $jadwal[]   = $pelajaran->nama_pelajaran; 
            }
            $informasi[] = [
                'hari' => strtoupper($key),
                'jadwal' => $jadwal,
            ];
        }
        $jadwalkelas        = Jadwalkelas::where('kelas_id',$kelas->id)->get();

        return view('kbm.kelas.show', compact('kelas','jadwalpelajaran','jadwalkelas','informasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Kelas::where('id',$request->id)->update([
            'nama_kelas' => $request->nama_kelas,
            'pegawai_id' => $request->pegawai_id
        ]);
        
        return back()->with('du','Kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($kelas)
    {
        Kelas::find($kelas)->delete();

        return back()->with('dd','Kelas');
;    }
}
