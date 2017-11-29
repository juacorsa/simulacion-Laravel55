<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoMateriaPrimasTable extends Migration
{
    public function up()
    {
        Schema::create('producto_materia_primas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fase');
            $table->integer('cantidad');
            $table->integer('producto_id')->unsigned();
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->integer('materia_prima_id')->unsigned();
            $table->foreign('materia_prima_id')->references('id')->on('materia_primas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('producto_materia_primas');
    }
}
