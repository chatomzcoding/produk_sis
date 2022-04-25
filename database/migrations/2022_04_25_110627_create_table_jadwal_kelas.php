<?php

use App\Models\Jadwalpelajaran;
use App\Models\Kelas;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableJadwalKelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_kelas', function (Blueprint $table) {
            $table->id();
            $table->string('hari',20);
            $table->string('jam',100);
            $table->foreignIdFor(Jadwalpelajaran::class);
            $table->foreignIdFor(Kelas::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_kelas');
    }
}
