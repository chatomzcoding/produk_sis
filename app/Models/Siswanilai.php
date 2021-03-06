<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswanilai extends Model
{
    use HasFactory;

    protected $table = 'siswa_nilai';

    protected $guarded = [];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function ujian()
    {
        return $this->belongsTo(Ujian::class);
    }
}
