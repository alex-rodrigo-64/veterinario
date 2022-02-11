<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->nullable();
            $table->string('codigo_barra')->nullable();
            $table->string('marca')->nullable();
            $table->decimal('precio_costo', 8, 2)->nullable();
            $table->decimal('precio_venta', 8, 2)->nullable();
            $table->bigInteger('cantidad')->nullable();

            $table->unsignedBigInteger('id_categoria')->nullable();

            $table->foreign('id_categoria')
            ->references('id')
            ->on('categorias')
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
        Schema::dropIfExists('productos');
    }
}
