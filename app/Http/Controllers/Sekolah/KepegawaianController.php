<?php

namespace App\Http\Controllers\Sekolah;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class KepegawaianController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('sekolah.kepegawaian.index', compact('pegawai'));
    }

    public function show($id)
    {
        $pegawai    = Pegawai::find($id);
        return view('sekolah.kepegawaian.show', compact('pegawai'));
    }
}
