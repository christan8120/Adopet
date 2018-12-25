<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetslovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petsloves', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('petOwner_id');
            $table->Integer('userOwner_id');
            $table->Integer('petLove_id');
            $table->Integer('userLove_id');
            $table->Integer('status');
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
        Schema::dropIfExists('petsloves');
    }
}
