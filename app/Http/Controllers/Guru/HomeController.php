<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Absensikelas;
use App\Models\Jadwalkelas;
use App\Models\Jadwalpelajaran;
use App\Models\Pegawai;
use App\Models\Siswanilai;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function jadwal($id)
    {
        $pegawai    = Pegawai::find($id);

        return view('guru.jadwalmengajar', compact('pegawai'));
    }

    public function agendakelas($id)
    {
        $jadwalkelas = Jadwalkelas::find($id);
        $ujian          = $jadwalkelas->jadwalpelajaran->ujian;
        $kbm = $jadwalkelas->kelas->kbm;
        // foreach ($kbm as $key) {
        //     Siswanilai::create([
        //         'ujian_id' => 3,
        //         'siswa_id' => $key->siswa_id,
        //         'nilai' => 75
        //     ]);
        // }
        $tanggal    = Absensikelas::where('jadwalkelas_id',$id)->distinct()->get(['tanggal']);
      
        $absensi    = [];
        $no         = 1;
        foreach ($kbm as $key) {
            $absen      = [];
            $h = 0;
            $i = 0;
            $s = 0;
            $a = 0;
            foreach ($tanggal as $k) {
                $status = Absensikelas::select('status_absensi')->where('jadwalkelas_id',$id)->where('tanggal',$k->tanggal)->where('siswa_id',$key->siswa_id)->first()->status_absensi;
                switch ($status) {
                    case 'hadir':
                        $h = $h + 1;
                        break;
                    case 'izin':
                        $i = $i + 1;
                        break;
                    case 'sakit':
                        $s = $s + 1;
                        break;
                    case 'alfa':
                        $a = $a + 1;
                        break;
                    
                    default:
                        # code...
                        break;
                }
                $absen[] = $status;
            }
            $absensi[] = [
                'no' => $no,
                'nama' => $key->siswa->nama_siswa,
                'absen' => $absen,
                'akumulasi' => [
                    'h' => $h,
                    'i' => $i,
                    's' => $s,
                    'a' => $a,
                    'jumlah' => count($tanggal),
                ]
            ];
            $no++;
            $absen = NULL;
        }

        return view('guru.agendakelas', compact('jadwalkelas','kbm','absensi','tanggal','ujian'));
    }

    public function pelajaran($id)
    {
        $jadwalpelajaran    = Jadwalpelajaran::find($id);
        $jadwalkelas        = $jadwalpelajaran->jadwalkelas;
        $matapelajaran      = $jadwalpelajaran->matapelajaran;
        $kelas              = [];
        foreach ($jadwalkelas as $key) {
            $kelas[$key->kelas->nama_kelas] = $key;
        }
        return view('guru.jadwalpelajaran', compact('jadwalpelajaran','matapelajaran','jadwalkelas','kelas'));
    }
}
