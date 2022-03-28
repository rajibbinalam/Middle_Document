<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWormSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worm_sliders', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id')->nullable();
            $table->string('title')->nullable();
            $table->string('worm_slider_speed')->nullable();
            $table->string('worm_slider_visible')->nullable();
            $table->string('worm_slider_hover')->nullable();
            $table->string('worm_slider_push')->nullable();
            $table->string('worm_slider_play')->nullable();
            $table->string('worm_1_link')->nullable();
            $table->string('worm_1_image')->nullable();
            $table->string('worm_1_upload')->nullable();
            $table->string('worm_1_expired')->nullable();
      
            $table->enum('status',['1','0'])->default('1');
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
        Schema::dropIfExists('worm_sliders');
    }
}
