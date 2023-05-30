<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_cliente');
            $table->string('lugar_entrega');
            $table->string('correo_cliente');
            $table->string('tipo_servicio');
            $table->date('fecha_entrega');
            $table->time('hora_entrega');
            $table->string('dispositivo_asignado');
            $table->string('estado');
            $table->unsignedBigInteger('created_for');
            $table->timestamps();

            $table->foreign('created_for')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}

