<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kios', function (Blueprint $table) {
            $table->bigIncrements('id_kios');
            $table->unsignedBigInteger('kecamatan');
            $table->foreign('kecamatan')->references('id_kecamatan')->on('kecamatan')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_kios');
            $table->string('pemilik');
            $table->string('alamat');
            $table->string('desa');
            $table->string('no_telpon');
            $table->string('kode');
            $table->string('spjb');
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
        Schema::dropIfExists('kios');
    }
}
