<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasPrimasTable extends Migration
{
    public function up()
    {
        Schema::create('materias_primas', function (Blueprint $table) {
            $table->increments('id');            
            $table->integer('codigo')->unique();
            $table->string('nombre', 100);
            $table->integer('stock');
            $table->integer('stock_minimo');
            $table->float('precio');
            $table->string('reanalisis', 10)->nullable();
            $table->string('lote', 10);
            $table->string('accion', 100)->nullable();
            $table->smallinteger('estado')->default(1);
            $table->integer('proveedor_id')->unsigned();
            $table->foreign('proveedor_id')->references('id')->on('proveedores');
        });
    }

    public function down()
    {
        Schema::dropIfExists('materias_primas');
    }
}
