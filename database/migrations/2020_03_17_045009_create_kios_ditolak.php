<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKiosDitolak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kios_ditolak', function (Blueprint $table) {
            $table->bigIncrements('id_penolakan');
            $table->string('pemilik');
            $table->string('nama_kios');
            $table->string('kecamatan');
            $table->string('email');
            $table->string('alamat');
            $table->string('alasan');
            $table->string('ktp');
            $table->string('siup');
            $table->string('tdp');
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
        Schema::dropIfExists('kios_ditolak');
    }
}
