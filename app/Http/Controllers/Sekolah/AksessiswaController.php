<?php

namespace App\Http\Controllers\Sekolah;

use App\Http\Controllers\Controller;
use App\Models\Aksessiswa;
use App\Models\Siswa;
use Illuminate\Http\Request;

class AksessiswaController extends Controller
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
        $siswa  = Siswa::find($_GET['id']);

        return view('sekolah.siswa.aksessiswa.create', compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aksessiswa  $aksessiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Aksessiswa $aksessiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aksessiswa  $aksessiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Aksessiswa $aksessiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aksessiswa  $aksessiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aksessiswa $aksessiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aksessiswa  $aksessiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aksessiswa $aksessiswa)
    {
        //
    }
}
