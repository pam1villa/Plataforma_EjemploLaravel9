<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\reaction;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reactions', function (Blueprint $table) {
            $table->id();

            //Campo de tipo enum que se llama value y que acepta solo 2 valores (los que defini en el modelo reaction)
            $table->enum('value', [reaction::LIKE, reaction::DISLIKE]);
            
            //Llave foranea de usuario que es el que puede reaccionar.
            $table->unsignedBigInteger('user_id');

            //Campos de una tabla polimorfica:
            $table->unsignedBigInteger('reactionable_id');
            $table->string('reactionable_type');

            //Restricciones de la llave foranea
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
        Schema::dropIfExists('reactions');
    }
};
