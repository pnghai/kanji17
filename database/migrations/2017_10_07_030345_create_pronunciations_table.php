<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePronunciationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pronunciations', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_kunyomi')->default(false);
            $table->unsignedInteger('character_id');
            $table->string('pronunciation');
            $table->string('pronunciation_audio_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pronunciations');
    }
}
