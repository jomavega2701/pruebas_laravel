<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->bigIncrements('id_ventas');
            $table->string('valor',20);
            $table->string('descuento',20);
            $table->string('cantidad',20);
            
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id','fk_userid_usuario')->references('id_usuario')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id','fk_productoid_producto')->references('id_producto')->on('producto')->onDelete('restrict')->onUpdate('restrict');
           
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
        Schema::dropIfExists('ventas');
    }
}
