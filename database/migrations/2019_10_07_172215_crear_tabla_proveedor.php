<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaProveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor', function (Blueprint $table) {
            $table->bigIncrements('id_proveedor');
            $table->string('nombre',50);
            $table->string('telefono',20);
            $table->string('direccion',50);
            $table->string('empresa',50);
            
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto','fk_id_producto_producto')->references('id_producto')->on('producto')->onDelete('restrict')->onUpdate('restrict');
            
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
        Schema::dropIfExists('proveedor');
    }
}
