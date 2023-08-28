<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZamowieniasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zamowienias', function (Blueprint $table) {
            $table->id();
            $table->string('imie');
            $table->string('nazwisko');
            $table->string('email');
            $table->string('nrtel');
            $table->string('ulica');
            $table->string('kodpczt');
            $table->string('miasto');
            $table->string('uwagi');
            $table->string('kawa');
            $table->string('ciastko');
            $table->string('sniadanie');
            $table->string('dodatki');
            $table->string('platnosc');
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
        Schema::dropIfExists('zamowienias');
    }
}
