<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPERSONATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('PERSONA', function (Blueprint $table) {
            $table->foreign(['IdRol'], 'persona_ibfk_1')->references(['idRol'])->on('ROL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('PERSONA', function (Blueprint $table) {
            $table->dropForeign('persona_ibfk_1');
        });
    }
}
