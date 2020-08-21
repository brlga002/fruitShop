<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyingFruits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buying_fruits', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            $table->date('expiration_date');
            $table->unsignedBigInteger('fruits_id');
            $table->timestamps();

            $table->foreign('fruits_id')->references('id')->on('fruits');
        });
    }

    

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buying_fruits');
    }
}
