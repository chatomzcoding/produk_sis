<?php

use App\Models\Matapelajaran;
use App\Models\Pegawai;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableJadwalPelajaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_pelajaran', function (Blueprint $table) {
            $table->id();
            $table->string('lama_jam','100');
            $table->foreignIdFor(Pegawai::class);
            $table->foreignIdFor(Matapelajaran::class);
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
        Schema::dropIfExists('jadwal_pelajaran');
    }
}
