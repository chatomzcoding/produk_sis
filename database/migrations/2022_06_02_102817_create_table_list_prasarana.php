<?php

use App\Models\Prasarana;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableListPrasarana extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_prasarana', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Prasarana::class);
            $table->string('nama_prasarana');
            $table->date('tanggal')->nullable();
            $table->text('keterangan_prasarana')->nullable();
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
        Schema::dropIfExists('list_prasarana');
    }
}
