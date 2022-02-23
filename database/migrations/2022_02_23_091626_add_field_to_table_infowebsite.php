<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToTableInfowebsite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('info_website', function (Blueprint $table) {
            $table->string('nama_sekolah');
            $table->string('kode_sekolah')->nullable();
            $table->text('visi');
            $table->text('misi');
            $table->string('slogan');
            $table->string('jenis_sekolah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('info_website', function (Blueprint $table) {
            //
        });
    }
}
