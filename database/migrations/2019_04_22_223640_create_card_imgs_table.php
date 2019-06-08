<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_imgs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('card_id');
            $table->string('img_path');
            $table->foreign('card_id')->references('id')->on('cards');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('card_imgs');
    }
}
