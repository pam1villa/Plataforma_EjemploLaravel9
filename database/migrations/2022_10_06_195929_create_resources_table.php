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
        Schema::create('resources', function (Blueprint $table) {
            $table->id();

            $table->string('url');

            //El nombre de atributo corresponde a el singular del nombre de SCHEMA::
            //las dos siguientes lineas se le agregan porque es una tabla polimorfica 
            $table->unsignedBigInteger('resourceble_id');
            $table->unsignedBigInteger('resourceble_type');


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
        Schema::dropIfExists('resources');
    }
};
