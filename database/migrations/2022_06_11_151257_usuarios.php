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
        Schema::create('usuarios', function(Blueprint $table){
            $table->increments('id');
            $table->string('Usuario')->unique();
            // $table->primary('id');
            $table->string('nombre');
            $table->string('email')->unique();
            $table->string('contraseña');
            $table->string('tipo');
            $table->longText('informacionp');
            $table->string('fotoDePerfil');
            $table->string('fotoHeader');
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
        Schema::dropIfExists('usuarios');
    }
};
