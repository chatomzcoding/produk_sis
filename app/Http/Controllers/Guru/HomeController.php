<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function jadwal($id)
    {
        $pegawai    = Pegawai::find($id);

        return view('guru.jadwalmengajar', compact('pegawai'));
    }
}
