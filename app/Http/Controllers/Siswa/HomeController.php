<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function biodata($id)
    {
        $siswa  = Siswa::find($id);

        return view('siswa.biodata', compact('siswa'));
    }

    public function jadwal($id)
    {
        $siswa  = Siswa::find($id);
        $jadwal = [];
        foreach ($siswa->kbm->kelas->jadwalkelas as $key) {
            $jadwal[$key->hari][] = $key;
        }
        return view('siswa.jadwal', compact('siswa','jadwal'));
    }
}
