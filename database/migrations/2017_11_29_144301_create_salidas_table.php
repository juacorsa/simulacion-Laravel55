<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalidasTable extends Migration
{    
    public function up()
    {
        Schema::create('salidas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');            
            $table->date('fecha');                                    
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('materia_prima_id')->unsigned();
            $table->foreign('materia_prima_id')->references('id')->on('materia_primas');
            $table->string('lanzamiento', 100)->nullable();
            $table->text('comentario')->nullable();            
            $table->timestamps();
       });
    }

    public function down()
    {
        Schema::dropIfExists('salidas');
    }
}
