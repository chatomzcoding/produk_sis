<?php

use App\Models\Pegawai;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableArsipPegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arsip_pegawai', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Pegawai::class);
            $table->text('ktp')->nullable();
            $table->text('kk')->nullable();
            $table->text('sk_awal')->nullable();
            $table->text('npwp')->nullable();
            $table->text('karis')->nullable();
            $table->text('skgb')->nullable();
            $table->text('sd')->nullable();
            $table->text('smp')->nullable();
            $table->text('sma')->nullable();
            $table->text('s1')->nullable();
            $table->text('s2')->nullable();
            $table->text('s3')->nullable();
            $table->text('lainnya')->nullable();
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
        Schema::dropIfExists('arsip_pegawai');
    }
}
