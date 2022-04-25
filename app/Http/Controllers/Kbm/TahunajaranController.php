<?php

namespace App\Http\Controllers\Kbm;

use App\Http\Controllers\Controller;
use App\Models\Kbm;
use App\Models\Kelas;
use App\Models\Siswa;
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
        $sesi = (isset($_GET['sesi'])) ? $_GET['sesi'] : 'index' ;
        switch ($sesi) {
            case 'daftarsiswa':
                $kelas_id = $_GET['kelas_id'];
                $kelas  = Kelas::find($kelas_id);
                $kbm    = Kbm::where('kelas_id',$kelas_id)->where('tahunajaran_id',$tahunajaran->id)->get();
                $siswa  = Siswa::where('status','aktif')->orderBy('nama_siswa','ASC')->get();
                return view('kbm.tahunajaran.daftarsiswa', compact('kelas','kbm','tahunajaran','siswa'));
                break;
            
            default:
                $kelas  = Kelas::orderBy('nama_kelas','ASC')->get();
                return view('kbm.tahunajaran.show', compact('kelas','tahunajaran'));
                break;
        }
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
        $tahunajaran->delete();

        return back()->with('dd','Tahun Ajaran');
    }
}
