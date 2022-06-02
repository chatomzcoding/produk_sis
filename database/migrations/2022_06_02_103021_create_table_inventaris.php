<?php

use App\Models\Listprasarana;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableInventaris extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Listprasarana::class);
            $table->string('nama');
            $table->text('kondisi');
            $table->text('fungsi');
            $table->date('tgl_pengadaan')->nullable();
            $table->year('tahun_pengadaan')->nullable();
            $table->string('status');
            $table->text('poto')->nullable();
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
        Schema::dropIfExists('inventaris');
    }
}
