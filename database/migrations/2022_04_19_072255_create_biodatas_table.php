<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unsigned()->nullable();
            $table->string('jenkel')->nullable;
            $table->string('temp_lahir')->nullable;
            $table->string('tgl_lahir')->nullable;
            $table->string('kewarganegaraan')->nullable;
            $table->text('alamat')->nullable;
            $table->string('ibu_kandung')->nullable;
            $table->string('nohp')->nullable;
            $table->string('telp')->nullable;
            $table->unsignedBigInteger('institusi_id')->unsigned()->nullable();
            $table->unsignedBigInteger('nip_institusi')->unsigned()->nullable();
            $table->unsignedBigInteger('klasifikasi_id')->unsigned()->nullable();
            $table->string('pend_terakhir')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('institusi_id')->references('id')->on('institusi')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('klasifikasi_id')->references('id')->on('klasifikasi')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biodata');
    }
}
