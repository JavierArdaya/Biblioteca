<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLIBROTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LIBRO', function (Blueprint $table) {
            $table->integer('IdLibro', true);
            $table->string('Titulo', 100)->nullable();
            $table->string('RutaFoto', 100)->nullable();
            $table->string('Isbn')->nullable();
            $table->string('NombrePortada', 100)->nullable();
            $table->string('TipoEncuadernacion', 30)->nullable();
            $table->integer('IdAutor')->nullable()->index('IdAutor');
            $table->integer('IdCategoria')->nullable()->index('IdCategoria');
            $table->integer('IdEditorial')->nullable()->index('IdEditorial');
            $table->string('UbicacionEstanteria', 50)->nullable();
            $table->integer('EjemplaresCantidad')->nullable();
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
        Schema::dropIfExists('LIBRO');
    }
}
