<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('nuptk');
            $table->string('nama_pegawai');
            $table->string('alamat');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('jk');
            $table->string('agama');
            $table->string('no_telp');
            $table->string('email');
            $table->string('jabatan');
            $table->string('status');
            $table->text('poto');
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
        Schema::dropIfExists('pegawai');
    }
}
