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
        Schema::create('t_pengiriman', function (Blueprint $table) { 
            $table->increments('id_pengiriman');       /*      KATEGORI     1 = Sampai depan pintu  |    2 = COD        */
            $table->string('jenis_pengiriman', 50);
            $table->integer('harga');
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
        Schema::dropIfExists('t_pengiriman');
    }
};
