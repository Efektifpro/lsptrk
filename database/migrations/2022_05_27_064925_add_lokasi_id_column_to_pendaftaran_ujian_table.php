<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLokasiIdColumnToPendaftaranUjianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pendaftaran_ujian', function (Blueprint $table) {
            $table->unsignedBigInteger('lokasi_id');

            $table->foreign('lokasi_id')->references('id')->on('lokasi_ujian')->onUpdate('cascade')->onDelete('restrict');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pendaftaran_ujian', function (Blueprint $table) {
            //
        });
    }
}
