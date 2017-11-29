<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration
{
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo')->unique();
            $table->string('nombre', 80);
            $table->string('direccion', 80)->nullable();
            $table->string('fax', 20)->nullable();
            $table->string('telefono', 20)->nullable();
            $table->string('poblacion', 80)->nullable();
            $table->string('email', 80)->nullable();
            $table->string('contacto', 40)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}
