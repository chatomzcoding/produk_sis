<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';

    protected $guarded = [];

    public function userakses()
    {
        return $this->hasOne(Aksespegawai::class);
    }

    public function jadwalpelajaran()
    {
        return $this->hasMany(Jadwalpelajaran::class);
    }
}
