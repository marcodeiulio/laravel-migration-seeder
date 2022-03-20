<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 25);
            $table->string('departure_station', 25);
            $table->string('arrival_station', 25);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->smallInteger('train_number')->unsigned();
            $table->tinyInteger('coaches')->unsigned();
            $table->boolean('is_late');
            $table->boolean('is_cancelled');
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
        Schema::dropIfExists('trains');
    }
}
