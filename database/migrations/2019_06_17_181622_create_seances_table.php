<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hall_id')->unsigned()->default(0);
            $table->integer('movie_id')->unsigned()->default(0);
            $table->dateTime('start_time')->nullable();
            $table->timestamps();
            $table->foreign('hall_id')->references('id')->on('halls')->onDelete('cascade');//->onUpdate('cascade');
            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');//->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seances');
    }
}
