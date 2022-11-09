<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card', function (Blueprint $table) {
            $table->id();
            $table->string('author');
            $table->string('title');
            $table->bigInteger('filter_id');
            $table->longText('htmlCode')->nullable();
            $table->longText('cssCode')->nullable();
            $table->longText('javascriptCode')->nullable();
            $table->timestamps();

            $table->foreign('filter_id')->references('id')->on('filter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('card');
    }
}
