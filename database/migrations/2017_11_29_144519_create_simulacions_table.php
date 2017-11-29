<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimulacionsTable extends Migration
{    
    public function up()
    {
        Schema::create('simulaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');  
            $table->date('fabricacion');            
            $table->string('lote', 10);                                    
            $table->string('caducidad', 10);
            $table->integer('producto_id')->unsigned();
            $table->foreign('producto_id')->references('id')->on('productos');            
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('simulacions');
    }
}
