<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokasiUjiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasi_ujian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kota_id')->unsigned();
            $table->string('nama_lokasi');
            $table->timestamps();

            $table->foreign('kota_id')->references('id')->on('kota')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lokasi_ujian');
    }
}
