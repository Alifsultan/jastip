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
        Schema::create('t_jasa', function (Blueprint $table) {
            $table->id('id_jasa');
            $table->integer('harga');
            $table->timestamps();
        });

        /*DB::table('t_jasa')->insert(
            array(
                'id_jasa' => '1',
                'harga' => '10000'
            )
        );*/
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_jasa');
    }
};
