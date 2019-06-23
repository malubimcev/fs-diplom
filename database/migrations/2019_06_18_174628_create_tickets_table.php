<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seance_id')->unsigned()->default(0);
            $table->integer('seat_id')->unsigned()->default(0);
            $table->string('qr_code')->default('');
            $table->timestamps();
            $table->foreign('seance_id')->references('id')->on('seances')->onDelete('cascade');//->onUpdate('cascade');
            $table->foreign('seat_id')->references('id')->on('seats')->onDelete('cascade');//->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
