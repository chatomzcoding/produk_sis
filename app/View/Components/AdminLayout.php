<?php

namespace App\View\Components;

use App\Models\Infowebsite;
use App\Models\Tahunajaran;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class AdminLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $menu;
    public $title;

    public function __construct($menu,$title='Sistem Sekolah')
    {
        $this->menu = $menu;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $user       = Auth::user();
        $datapokok  = Infowebsite::first();
        $tahunajaran    = Tahunajaran::where('status_tahun_ajaran','aktif')->first();
        $kelas      = [];
        if (isset($user->aksespegawai->pegawai->kelas)) {
            $kelas      = $user->aksespegawai->pegawai->kelas;
        }
        return view('components.admin-layout', compact('user','datapokok','tahunajaran','kelas'));
    }
}
