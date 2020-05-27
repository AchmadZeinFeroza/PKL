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
            $table->unsignedBigInteger('desa');
            $table->foreign('desa')->references('id_desa')->on('desa')->onUpdate('cascade')->onDelete('cascade');
            $table->string('no_telpon');
            $table->string('kode')->nullable();
            $table->string('spjb')->nullable();
            $table->Integer('cetak_spjb')->nullable();
            $table->string('tanggal_spjb')->nullable();
            $table->string('user_spjb')->nullable();
            $table->Integer('cetak_penunjukan')->nullable();
            $table->string('tanggal_penunjukan')->nullable();
            $table->string('user_penunjukan')->nullable();
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
