<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileDiscoversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_discovers', function (Blueprint $table) {
            $table->id();
            $table->text('heading');
            $table->text('description');
            $table->unsignedBigInteger('image_icon_image_id');
            $table->unsignedBigInteger('image_icon_icon_id');
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
        Schema::dropIfExists('profile_discovers');
    }
}
