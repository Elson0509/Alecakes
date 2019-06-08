<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_infos', function (Blueprint $table) {
            $table->unsignedBigInteger('language_id');
            $table->string('text',400);
            $table->string('people_text');
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
        Schema::dropIfExists('price_infos');
    }
}
