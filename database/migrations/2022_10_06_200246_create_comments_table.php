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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            //como un usuario puede comentar: se le agrega la siguiente llave foranea
            $table->unsignedBigInteger('user_id');

            //El nombre de atributo corresponde a el singular del nombre de SCHEMA::
            //las dos siguientes lineas se le agregan porque es una tabla polimorfica 
            $table->unsignedBigInteger('commentable_id');
            $table->unsignedBigInteger('commentable_type');

            //Restriccion de llave foranea:
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');


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
        Schema::dropIfExists('comments');
    }
};
