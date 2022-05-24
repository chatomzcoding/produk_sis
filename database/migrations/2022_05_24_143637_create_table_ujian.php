<?php

use App\Models\Matapelajaran;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUjian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ujian', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Matapelajaran::class);
            $table->string('jenis');
            $table->string('nama_ujian');
            $table->date('tgl_ujian');
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
        Schema::dropIfExists('ujian');
    }
}
