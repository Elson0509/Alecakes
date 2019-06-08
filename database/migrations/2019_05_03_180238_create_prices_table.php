<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->unsignedBigInteger('language_id');
            $table->unsignedInteger('size');
            $table->unsignedInteger('people');
            $table->decimal('price',6,2);
            $table->foreign('language_id')->references('id')->on('languages');
            $table->primary(['language_id','size']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prices');
    }
}
