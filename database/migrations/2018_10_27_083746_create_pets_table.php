<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('pet_name');
            $table->integer('userOwner');
            $table->integer('age');
            $table->string('gender');
            $table->integer('status');
            $table->integer('post_status'); //0:not for adopt or find love, 1: available to be adopted, 2: finding love
            $table->string('picture_src');
            $table->string('description');
            $table->string('audit_activity');
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
        Schema::dropIfExists('pets');
    }
}
