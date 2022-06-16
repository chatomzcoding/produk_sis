<?php

use App\Models\Jadwalkelas;
use App\Models\Siswa;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAbsensiKelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi_kelas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Jadwalkelas::class);
            $table->foreignIdFor(Siswa::class);
            $table->string('status_absensi');
            $table->date('tanggal');
            $table->text('keterangan');
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
        Schema::dropIfExists('absensi_kelas');
    }
}
