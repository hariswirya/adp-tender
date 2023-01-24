<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasiTendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_tenders', function (Blueprint $table) {
            $table->increments('id_informasi');
            $table->string('kode_tender')->nullable();
            $table->string('kode_rup');
            $table->string('nama_paket');
            $table->string('pagu');
            $table->string('hps');
            $table->string('satuan_kerja');
            $table->string('tahap');
            $table->integer('peserta');
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
        Schema::dropIfExists('informasi_tenders');
    }
}
