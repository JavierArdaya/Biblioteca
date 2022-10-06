<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePRESTAMOTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PRESTAMO', function (Blueprint $table) {
            $table->integer('IdPrestamo', true);
            $table->integer('IdEstadoPrestamo')->nullable()->index('IdEstadoPrestamo');
            $table->integer('IdPersona')->nullable()->index('IdPersona');
            $table->integer('IdLibro')->nullable()->index('IdLibro');
            $table->dateTime('FechaDevolucion')->nullable();
            $table->dateTime('FechaConfirmacionDevolucion')->nullable();
            $table->string('EstadoEntregadoLibro', 100)->nullable();
            $table->string('EstadoRecibidoLibro', 100)->nullable();
            $table->boolean('Estado')->nullable()->default(false);
            $table->dateTime('FechaCreacion')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PRESTAMO');
    }
}
