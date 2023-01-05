<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanggalUjisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanggal_uji', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bidang_id')->unsigned();
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('bidang_id')->references('id')->on('bidang_uji')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanggal_uji');
    }
}
