<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->bigIncrements('id_ma');
            // Inicio Llave Foranea
            $table->unsignedBigInteger('id_cli');
            $table->foreign('id_cli')
                  ->references('id_cli')
                  ->on('clientes')
                  ->onDelete('cascade');
            // Fin llave Foranea
            $table->string('nombre_ma');
            $table->integer('edad');
            $table->string('sexo','1');
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
        Schema::dropIfExists('mascotas');
    }
}
