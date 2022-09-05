<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('no_hp');
            $table->string('alamat_kirim', 191);
            $table->string('nama_barang', 191);
            $table->integer('harga_barjas');
            $table->string('pengiriman', 100);
            $table->integer('total_harga');
            $table->enum('status', ['0', '1', '2', '3'])->nullable();  /* 0 = Menuggu pembayaran; 1 = Proses pembelian; 2 = Proses Pengiriman; 3 = Selesai*/
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
        Schema::dropIfExists('barang');
    }
};
