<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegristasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regristasi', function (Blueprint $table) {
            $table->bigIncrements('id_regristasi');
            $table->string('nama_kios');
            $table->string('pemilik');
            $table->string('email');
            $table->string('alamat');
            $table->string('kecamatan');
            $table->string('no_telpon');
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
        Schema::dropIfExists('regristasi');
    }
}
