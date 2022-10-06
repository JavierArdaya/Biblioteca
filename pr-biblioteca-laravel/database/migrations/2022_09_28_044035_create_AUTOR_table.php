<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAUTORTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AUTOR', function (Blueprint $table) {
            $table->integer('IdAutor', true);
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
        Schema::dropIfExists('AUTOR');
    }
}
