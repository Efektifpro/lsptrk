<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitusisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institusi', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->unsignedBigInteger('tipe_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('tipe_id')->references('id')->on('tipe_peserta')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institusis');
    }
}
