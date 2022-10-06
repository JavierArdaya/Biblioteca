<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCATEGORIATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CATEGORIA', function (Blueprint $table) {
            $table->integer('IdCategoria', true);
            $table->string('Descripcion', 50)->nullable();
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
        Schema::dropIfExists('CATEGORIA');
    }
}
