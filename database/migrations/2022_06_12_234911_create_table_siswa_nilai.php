<?php

use App\Models\Siswa;
use App\Models\Ujian;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSiswaNilai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_nilai', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Ujian::class);
            $table->foreignIdFor(Siswa::class);
            $table->string('nilai',10);
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
        Schema::dropIfExists('siswa_nilai');
    }
}
