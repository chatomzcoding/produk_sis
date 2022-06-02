<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listprasarana extends Model
{
    use HasFactory;

    protected $table = 'list_prasarana';

    protected $guarded = [];

    public function inventaris()
    {
        return $this->hasMany(Inventaris::class);
    }
}
