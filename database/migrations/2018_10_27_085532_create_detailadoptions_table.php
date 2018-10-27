<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailadoptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailadoptions', function (Blueprint $table) {
            // $table->increments('id');
            $table->integer('tr_id');
            $table->integer('pet_id');            
            $table->string('audit_activity');            
            $table->timestamps();
            $table->primary(array('tr_id', 'pet_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailadoptions');
    }
}
