<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranUjiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_ujian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->unsignedBigInteger('sesi_id')->unsigned();
            $table->string('metode_bayar');
            $table->unsignedBigInteger('assesment_id')->unsigned();
            $table->string('jawaban');
            $table->string('photo_ktp');
            $table->string('doc_pendukung')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sesi_id')->references('id')->on('sesi')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('assesment_id')->references('id')->on('assesment_mandiri')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftaran_ujian');
    }
}
