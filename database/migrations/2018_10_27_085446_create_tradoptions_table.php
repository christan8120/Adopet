<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradoptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tradoptions', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('userOwner');
            $table->Integer('userAdopter');
            $table->date('transaction_date');
            $table->Integer('pet_id');
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
        Schema::dropIfExists('tradoptions');
    }
}
