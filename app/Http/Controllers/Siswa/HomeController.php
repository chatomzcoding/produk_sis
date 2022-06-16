<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\Ujian;
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

    public function ujian($id)
    {
        $siswa  = Siswa::find($id);
        $jadwalujian = [];
        foreach ($siswa->kbm->kelas->jadwalkelas as $key) {
            $ujian = $key->jadwalpelajaran->ujian;
            if (count($ujian) > 0) {
                $jadwalujian[] = [
                    'mata_pelajaran' => $key->jadwalpelajaran->matapelajaran->nama_pelajaran,
                    'jadwal' => $ujian
                ];
            }
        }
        return view('siswa.ujian', compact('siswa','jadwalujian'));
    }

    public function soal($id,$ujian)
    {
        $siswa  = Siswa::find($id);
        $ujian  = Ujian::find($ujian);
        return view('siswa.soal', compact('siswa','ujian'));
    }
}
