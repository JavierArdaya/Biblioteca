<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePERSONATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PERSONA', function (Blueprint $table) {
            $table->integer('IdPersona', true);
            $table->string('Nombre', 50)->nullable();
            $table->string('Apellido', 50)->nullable();
            $table->string('Email', 50)->nullable();
            $table->string('Password', 50)->nullable();
            $table->string('Codigo', 50)->nullable();
            $table->integer('IdRol')->nullable()->index('IdRol');
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
        Schema::dropIfExists('PERSONA');
    }
}
