<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_mitra');
            $table->string('email')->unique();
            $table->string('no_hp');
            $table->string('password');
            $table->string('nama_pemilik')->nullable();
            $table->string('nama_bank')->nullable();
            $table->string('nama_rekening')->nullable();
            $table->string('nama_akun_bank')->nullable();
            $table->text('alamat')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('mitras');
    }
}
