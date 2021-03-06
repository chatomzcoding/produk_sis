<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwalkelas extends Model
{
    use HasFactory;

    protected $table = 'jadwal_kelas';

    protected $guarded = [];

    public function jadwalpelajaran()
    {
        return $this->belongsTo(Jadwalpelajaran::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
