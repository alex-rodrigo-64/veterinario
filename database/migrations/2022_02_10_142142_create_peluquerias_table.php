<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeluqueriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peluquerias', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('carnet')->nullable();
            $table->string('nombrePaciente')->nullable();
            $table->string('detalleCorte')->nullable();
            $table->decimal('total', 8, 2)->nullable();

            $table->foreign('carnet')
            ->references('id_carnet')
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
        Schema::dropIfExists('peluquerias');
    }
}
