<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEDITORIALTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EDITORIAL', function (Blueprint $table) {
            $table->integer('IdEditorial', true);
            $table->string('Descripcion', 50)->nullable();
            $table->boolean('Estado')->nullable()->default(false);
            $table->dateTime('AnioPublicacion')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('EDITORIAL');
    }
}
