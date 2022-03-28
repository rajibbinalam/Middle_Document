<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('worm_slider_speed')->nullable();
            $table->string('worm_slider_visible')->nullable();
            $table->string('worm_slider_hover')->nullable();
            $table->string('worm_slider_push')->nullable();
            $table->string('worm_slider_play')->nullable();
            $table->string('gallery_slider_speed')->nullable();
            $table->string('gallery_slider_visible')->nullable();
            $table->string('gallery_slider_hover')->nullable();
            $table->string('gallery_slider_push')->nullable();
            $table->string('gallery_slider_play')->nullable();
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
        Schema::dropIfExists('sliders');
    }
}
