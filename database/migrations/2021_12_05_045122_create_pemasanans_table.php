<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemasanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemasanans', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_transaksi');
            $table->string('nama_pemesanan')->nullable();
            $table->integer('nomor_meja')->nullable();
            $table->enum('status_pesanan', ['new','approved']);
            $table->double('total_harga');
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
        Schema::dropIfExists('pemasanans');
    }
}
