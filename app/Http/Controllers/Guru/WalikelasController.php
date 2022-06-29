<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Kehadiransiswa;
use App\Models\Kelas;
use App\Models\Matapelajaran;
use Illuminate\Http\Request;

class WalikelasController extends Controller
{
    public function index($id)
    {
        $kelas  = Kelas::find($id);
        $kbm    = $kelas->kbm;

        $bulan = (isset($_GET['bulan'])) ? $_GET['bulan'] :  ambil_bulan();
       
        $mapel  = Matapelajaran::all();
        // KBM
        $siswa      = [];
        $l          = 0;
        $p          = 0;
        $no         = 1;
        foreach ($kbm as $key) {
            $siswa  = $key->siswa;
            // jumlah genre
            if ($siswa->jk == 'laki-laki') {
                $l = $l + 1;
            } else {
                $p = $p + 1;
            }
            // data mapel
            $mapel  = [];
            foreach ($siswa->siswanilai as $k) {
                $mapel[$k->ujian->jadwalpelajaran->matapelajaran->nama_pelajaran][$k->ujian->sesi][] = $k->nilai;
            }

            // kehadiran siswa per bulan
            $kehadiran = [];
            for ($i=1; $i <= 31; $i++) { 
                $datakehadiran = Kehadiransiswa::where('siswa_id',$siswa->id)->whereDay('tanggal',$i)->first();
                if ($datakehadiran) {
                    $kehadiran[] = 1;
                } else {
                    $kehadiran[] = 0;
                }
            }
            $data[]   = [
                'no' => $no,
                'siswa' => $siswa,
                'mapel' => $mapel,
                'kehadiran' => $kehadiran
            ];
            $no++;
        }
        $main   = [
            'statistik' => [
                'siswa' => [
                    'total' => count($kbm),
                    'l' => $l,
                    'p' => $p,
                    'lain' => 0,
                ]
            ]
        ];
        return view('guru.walikelas.index', compact('kelas','kbm','main','data','bulan'));
    }
}
