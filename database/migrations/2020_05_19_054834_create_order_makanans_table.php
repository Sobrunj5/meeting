<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderMakanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_makanans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_makanans')->unsigned();
            $table->integer('id_bookings')->unsigned();
            $table->integer('harga');
            $table->integer('jumlah');
            $table->integer('total_harga');
            $table->timestamps();

            $table->foreign('id_makanans')->references('id')->on('makanans')->onDelete('CASCADE');
            $table->foreign('id_bookings')->references('id')->on('bookings')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_makanans');
    }
}