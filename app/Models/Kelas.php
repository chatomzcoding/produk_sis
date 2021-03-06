<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    protected $guarded = [];

    public function jadwalkelas()
    {
        return $this->hasMany(Jadwalkelas::class)->orderBy('jam','ASC');
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }

    public function kbm()
    {
        return $this->hasMany(Kbm::class)->where('status_kbm','aktif');
    }
}
