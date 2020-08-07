<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('isi');
            $table->date('tanggal_buat');
            $table->date('tanggal_diperbaharui');
            $table->unsignedBigInteger('profil_id');

            $table->foreign('profil_id')->references('id')->on('profil');
            $table->unsignedBigInteger('jawaban_id');

            $table->foreign('jawaban_id')->references('id')->on('komentar_jawaban');
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
        Schema::dropIfExists('jawaban');
    }
}
