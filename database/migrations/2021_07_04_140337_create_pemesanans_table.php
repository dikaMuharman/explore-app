<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wisata_id');
            $table->string('nama_pemesan');
            $table->string('wisata');
            $table->string('paket');
            $table->date('tanggal_berangkat');
            $table->date('tanggal_pulang');
            $table->integer('harga_paket');
            $table->integer('jumlah_paket');
            $table->integer('total_harga');
            $table->foreign('wisata_id')->references('id')->on('wisatas')->onDelete('cascade');
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
        Schema::dropIfExists('pemesanans');
    }
}
