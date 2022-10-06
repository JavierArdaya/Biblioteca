<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToLIBROTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('LIBRO', function (Blueprint $table) {
            $table->foreign(['IdAutor'], 'libro_ibfk_1')->references(['IdAutor'])->on('AUTOR');
            $table->foreign(['IdEditorial'], 'libro_ibfk_3')->references(['IdEditorial'])->on('EDITORIAL');
            $table->foreign(['IdCategoria'], 'libro_ibfk_2')->references(['IdCategoria'])->on('CATEGORIA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('LIBRO', function (Blueprint $table) {
            $table->dropForeign('libro_ibfk_1');
            $table->dropForeign('libro_ibfk_3');
            $table->dropForeign('libro_ibfk_2');
        });
    }
}
