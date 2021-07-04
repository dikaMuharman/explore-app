<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_wisatas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wisata_id');
            $table->string('nama_wisata');
            $table->string('nama_hotel');
            $table->string('nama_pesawat');
            $table->float('rating');
            $table->json('fasilitas');
            $table->integer('harga_paket');
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
        Schema::dropIfExists('paket_wisatas');
    }
}
