<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCirugiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cirugias', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('carnetIdentidad')->nullable();
            $table->string('nombreMascota')->nullable();
            $table->string('detalle')->nullable();
            $table->dateTime('fecha')->nullable();
            $table->decimal('total', 8, 2)->nullable();
            $table->unsignedBigInteger('paciente')->nullable();

            $table->foreign('paciente')
            ->references('id')
            ->on('recepcions')
            ->onDelete('cascade');

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
        Schema::dropIfExists('cirugias');
    }
}
