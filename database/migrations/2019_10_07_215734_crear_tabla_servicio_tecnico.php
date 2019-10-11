<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaServicioTecnico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_tecnico', function (Blueprint $table) {
            $table->bigIncrements('id_servicio_tecnico');
            $table->string('equipo',50);
            $table->string('marca',20);
            $table->string('modelo',20);
            $table->string('estado_fisico',50);
            $table->string('daño',50);
            $table->string('valor',20);
            $table->string('garantia',20);
            $table->string('abono',20);
            $table->string('saldo',20);
            $table->string('estado',50);
            
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario','fk_id_usuario_usuario')->references('id_usuario')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            
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
        Schema::dropIfExists('servicio_tecnico');
    }
}
