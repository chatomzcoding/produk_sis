<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Absensikelas;
use App\Models\Jadwalkelas;
use Illuminate\Http\Request;

class AbsensikelasController extends Controller
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
        // cek jika semua hadir
        if ($request->status_absensi == 'semua') {
            $jadwalkelas = Jadwalkelas::find($request->jadwalkelas_id);
            foreach ($jadwalkelas->kelas->kbm as $key) {
                Absensikelas::create([
                    'jadwalkelas_id' => $request->jadwalkelas_id,
                    'siswa_id' => $key->siswa_id,
                    'tanggal' => $request->tanggal,
                    'status_absensi' => 'hadir',
                ]);
            }

            return back()->with('successv2','Siswa semua hadir');
        } else {
            # code...
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absensikelas  $absensikelas
     * @return \Illuminate\Http\Response
     */
    public function show(Absensikelas $absensikelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absensikelas  $absensikelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Absensikelas $absensikelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absensikelas  $absensikelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absensikelas $absensikelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absensikelas  $absensikelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absensikelas $absensikelas)
    {
        //
    }
}
