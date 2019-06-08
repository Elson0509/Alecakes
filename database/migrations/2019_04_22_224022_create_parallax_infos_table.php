<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParallaxInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parallax_infos', function (Blueprint $table) {
            $table->unsignedBigInteger('language_id');
            $table->string('title');
            $table->string('text1');
            $table->string('text2');
            $table->string('text3');
            $table->foreign('language_id')->references('id')->on('languages');
            $table->primary('language_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parallax_infos');
    }
}
