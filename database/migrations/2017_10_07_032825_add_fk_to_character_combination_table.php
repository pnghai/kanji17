<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToCharacterCombinationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('character_combination', function (Blueprint $table) {
	        $table->foreign('character_id')->references('id')->on('characters');
	        $table->foreign('combination_id')->references('id')->on('combinations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('character_combination', function (Blueprint $table) {
	        $table->dropForeign(['character_id']);
	        $table->dropForeign(['combination_id']);
        });
    }
}
