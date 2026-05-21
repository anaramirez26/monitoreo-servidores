<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//Archivo DDL, de definicion de datos

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //up() se ejecuta cuando se construye la base de datos.
    public function up()
    {
        Schema::create('servidores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('url');
            $table->string('user')->nullable();
            $table->string('password')->nullable();
            $table->timestamps(); /*crea dos columnas: created_at y updated_at (tipo TIMESTAMP). 
            El ORM las actualizará solas cada vez que insertes o edites un servidor. */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //down() se ejecuta cuando se ejecuta un rollback en la terminal al equivocarme en algo
    public function down()
    {
        Schema::dropIfExists('servidores');
    }
};
