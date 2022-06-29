<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $guarded = [];

    public function aksessiswa()
    {
        return $this->hasOne(Aksessiswa::class);
    }

    public function kbm()
    {
        return $this->hasOne(Kbm::class)->orderBy('id','DESC');
    }

    public function siswanilai()
    {
        return $this->hasMany(Siswanilai::class);
    }
}
