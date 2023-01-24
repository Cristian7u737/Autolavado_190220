<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id_vehiculo');
            $table->string('placa', 50);
            $table->string('tipo', 15);
            $table->string('marca', 15);
            $table->integer('modelo');            
            $table->string('color', 10);
            $table->string('puertas');
            $table->date('fechareg');                     
            $table->boolean('status');  
            $table-> unsignedBigInteger('id_cliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
};
