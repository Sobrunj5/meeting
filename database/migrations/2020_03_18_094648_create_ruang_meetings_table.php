<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuangMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruang_meetings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_mitra')->unsigned();
            $table->string('nama_tempat', 100)->unique();
            $table->integer('kapasitas');
            $table->integer('harga_sewa');
            $table->text('foto')->nullable();
            $table->text('keterangan');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('ruang_meetings');
    }
}
