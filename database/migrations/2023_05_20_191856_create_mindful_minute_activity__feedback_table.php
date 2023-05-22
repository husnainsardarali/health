<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMindfulMinuteActivityFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mindful_minute_activity__feedback', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('activity_id');
            $table->integer('points');
            $table->unsignedBigInteger('image_icon_id');
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
        Schema::dropIfExists('mindful_minute_activity__feedback');
    }
}
