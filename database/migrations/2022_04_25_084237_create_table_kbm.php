<?php

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Tahunajaran;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKbm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kbm', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Tahunajaran::class);
            $table->foreignIdFor(Siswa::class);
            $table->foreignIdFor(Kelas::class);
            $table->string('status_kbm');            
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
        Schema::dropIfExists('kbm');
    }
}
