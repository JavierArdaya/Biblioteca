<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPRESTAMOTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('PRESTAMO', function (Blueprint $table) {
            $table->foreign(['IdEstadoPrestamo'], 'prestamo_ibfk_1')->references(['IdEstadoPrestamo'])->on('ESTADO_PRESTAMO');
            $table->foreign(['IdLibro'], 'prestamo_ibfk_3')->references(['IdLibro'])->on('LIBRO');
            $table->foreign(['IdPersona'], 'prestamo_ibfk_2')->references(['IdPersona'])->on('PERSONA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('PRESTAMO', function (Blueprint $table) {
            $table->dropForeign('prestamo_ibfk_1');
            $table->dropForeign('prestamo_ibfk_3');
            $table->dropForeign('prestamo_ibfk_2');
        });
    }
}
