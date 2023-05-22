<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthyHeadsSubHealthyHeadOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('healthy_heads_sub_healthy_head_options', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('healthyheads_id');
            $table->unsignedBigInteger('option_id');
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
        Schema::dropIfExists('healthy_heads_sub_healthy_head_options');
    }
}
