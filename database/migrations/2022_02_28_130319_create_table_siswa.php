<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nisn')->nullable();
            $table->string('nipd')->nullable();
            $table->string('nama_siswa');
            $table->string('alamat');
            $table->date('tanggal_lahir')->nullable();
            $table->string('tempat_lahir');
            $table->string('jk');
            $table->string('agama');
            $table->string('no_telp')->nullable();
            $table->string('email')->nullable();
            $table->string('status');
            $table->year('tahun_masuk');
            $table->text('poto')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
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
        Schema::dropIfExists('siswa');
    }
}
