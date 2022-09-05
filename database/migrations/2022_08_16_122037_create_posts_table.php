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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('no_hp');
            $table->string('alamat_kirim', 191);
            $table->string('nama_makanan', 191);
            $table->integer('harga_barjas');
            $table->string('pengiriman', 100);
            $table->integer('total_harga');
            $table->integer('status', ['0', '1'])->default('0');
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
        Schema::dropIfExists('staff');
    }
};