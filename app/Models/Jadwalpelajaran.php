<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwalpelajaran extends Model
{
    use HasFactory;

    protected $table = 'jadwal_pelajaran';

    protected $guarded = [];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }

    public function matapelajaran()
    {
        return $this->belongsTo(Matapelajaran::class);
    }

    public function jadwalkelas()
    {
        return $this->hasMany(Jadwalkelas::class);
    }
    public function ujian()
    {
        return $this->hasMany(Ujian::class);
    }
}
