<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $menu   = 'dashboard';
        $statistik = [
            'pengajar' => Pegawai::count(),
            'siswa' => Siswa::count(),
            'inventaris' => 10,
            'pengunjung' => 1200
        ];
        $main   = [
            'statistik' => $statistik
        ];
        return view('admin.dashboard', compact('menu','main'));
    }
}
