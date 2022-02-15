<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecepcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recepcions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('carnet');
            $table->string('nombrePropietario')->nullable();
            $table->string('telefono')->nullable();
            $table->string('domicilio')->nullable();
            $table->dateTime('fecha')->nullable();
            $table->string('nombrePaciente')->nullable();
            $table->string('raza')->nullable();
            $table->string('edad')->nullable();
            $table->string('especie')->nullable();
            $table->string('peso')->nullable();
            $table->string('esterilizado')->nullable();
            $table->string('motivo')->nullable();
            $table->string('temperatura')->nullable();
            $table->string('heses')->nullable();
            $table->string('mucosas')->nullable();
            $table->string('desidratacion')->nullable();
            $table->string('piel')->nullable();
            $table->string('boca')->nullable();
            $table->string('palpacion')->nullable();
            $table->string('animo')->nullable();
            $table->string('medicamentos')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('recepcions');
    }
}
