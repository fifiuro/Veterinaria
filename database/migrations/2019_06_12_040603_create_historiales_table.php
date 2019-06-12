<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historiales', function (Blueprint $table) {
            $table->bigIncrements('id_his');
            // Inicio llave foreanea
            $table->unsignedBigInteger('id_ma');
            $table->foreign('id_ma')
                  ->references('id_ma')
                  ->on('mascotas')
                  ->onDelete('cascade');
            // Fin llave foranea

            // Inicio llave foreanea
            $table->unsignedBigInteger('id_se');
            $table->foreign('id_se')
                  ->references('id_se')
                  ->on('servicios')
                  ->onDelete('cascade');
            // Fin llave foranea

            $table->string('observaciones');
            $table->boolean('estado');
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
        Schema::dropIfExists('historiales');
    }
}
