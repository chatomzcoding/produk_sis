<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kbm extends Model
{
    use HasFactory;

    protected $table = 'kbm';

    protected $guarded = [];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
