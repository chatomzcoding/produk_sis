<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ZKLibrary;


class AbsensiController extends Controller
{
    public $zk;

    function __construct()
    {
        $this->zk = new ZKLibrary('192.168.1.201', 4370);
        $this->zk->connect();
        $this->zk->disableDevice();
    }

    public function index()
    {
        $data = (isset($_GET['data'])) ? $_GET['data'] : NULL ;
        switch ($data) {
            case 'testsuara':
                $this->zk->testVoice();
                $data   = 'Test Suara Alat';
                break;
            case 'hapuslog':
                $this->zk->clearAttendance();
                $data   = 'Log Dalam Mesin telah terhapus';
                break;
            case 'hapususer':
                $this->zk->clearUser();
                $data   = 'Hapus User';
                break;
            case 'tambahuser':
                $this->zk->setUser(2, 101, 'agum gurnida', '', 0);
                $data   = 'Tambah User';
                break;
            case 'getdevicename':
                $data = 'Nama Alat Merk Solution Model '.$this->zk->getDeviceName();
                break;
            default:
                # code...
                break;
        }
        return view('admin.absensi.index', compact('data'));
    }

    public function show($s)
    {
        switch ($s) {
            case 'user':
                $users = $this->zk->getUser();
                return view('admin.absensi.user', compact('users'));
                break;
            case 'testsuara':
                $users = $this->zk->testVoice();
                return redirect('admin/absensi');
                break;
            case 'log':
                $log = $this->zk->getAttendance();
                return view('admin.absensi.log', compact('log'));
                break;
            default:
                return redirect('admin/absensi');
                break;
        }
    }

    function __destruct()
    {
        $this->zk->enableDevice();
        $this->zk->disconnect();
    }
}
