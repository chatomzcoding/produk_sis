<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Siswanilai;
use App\Models\Ujian;
use Illuminate\Http\Request;

class SiswanilaiController extends Controller
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
        $ujian = Ujian::find($request->ujian_id);
        // cek jawaban
        $index  = 1;
        $benar  = 0;
        $jawaban = $request->jawaban;
        foreach ($ujian->soal as $k) {
            if ($k->jawaban == $jawaban[$index]) {
                $benar = $benar + 1;
            }
            $index++;
        }

        $nilai  = $benar/count($jawaban) * 100;

        Siswanilai::create([
            'ujian_id' => $ujian->id,
            'siswa_id' => $request->siswa_id,
            'nilai' => $nilai,
            'jawaban' => json_encode($jawaban),
        ]);
        return back()->with('ds','Jawaban');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswanilai  $siswanilai
     * @return \Illuminate\Http\Response
     */
    public function show(Siswanilai $siswanilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswanilai  $siswanilai
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswanilai $siswanilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswanilai  $siswanilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswanilai $siswanilai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswanilai  $siswanilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswanilai $siswanilai)
    {
        //
    }
}
