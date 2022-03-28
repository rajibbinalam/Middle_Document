<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGallerySlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_sliders', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id')->nullable();
            $table->string('title')->nullable();
            $table->string('gallery_slider_speed')->nullable();
            $table->string('gallery_slider_visible')->nullable();
            $table->string('gallery_slider_hover')->nullable();
            $table->string('gallery_slider_push')->nullable();
            $table->string('gallery_slider_play')->nullable();
            $table->string('gallery_slider_image')->nullable();
            $table->string('gallery_slider_upload_date')->nullable();
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
        Schema::dropIfExists('gallery_sliders');
    }
}
