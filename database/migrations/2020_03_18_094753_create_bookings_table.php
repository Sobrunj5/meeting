<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_ruang')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->time('lama');
            $table->date('tanggal');
            $table->time('jam');
            $table->string('makanan');
            $table->integer('catatan');
            $table->integer('total');
            $table->integer('bayar');
            $table->date('tanggal_boking');
            $table->integer('url');
            $table->integer('ipaymu');
            $table->enum('status', ['1', '0']);
            $table->timestamps();

            $table->foreign('id_ruang')->references('id')->on('ruang_meetings')->onDelete('CASCADE');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
