<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    use HasFactory;

    protected $table = 'ujian';

    protected $guarded = [];

    public function soal()
    {
        return $this->hasMany(Soal::class);
    }
}
