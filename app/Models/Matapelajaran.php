<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matapelajaran extends Model
{
    use HasFactory;

    protected $table = 'mata_pelajaran';

    protected $guarded = [];

    public function jadwalpelajaran()
    {
        return $this->hasOne(Jadwalpelajaran::class);
    }

    public function ujian()
    {
        return $this->hasMany(Ujian::class);
    }
}
