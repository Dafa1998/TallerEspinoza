<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprobanteDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprobante_detalle', function (Blueprint $table) {
            $table->integer('comprobante_id')->unsigned();
            $table->integer('producto_id')->unsigned();
            $table->integer('mecanica_id')->unsigned();
            $table->decimal('cantidad', 10,2);
            $table->decimal('precio_unitario', 10,2);
            $table->decimal('total', 10,2);
            $table->timestamps();

            //Relaciones

            $table->foreign('comprobante_id')->references('id')->on('comprobantes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('producto_id')->references('id')->on('productos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('mecanica_id')->references('id')->on('mecanicas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comprobante_detalle');
    }
}
