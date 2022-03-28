<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_banners', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id')->nullable();
            $table->string('banner_1_link')->nullable();
            $table->string('banner_1_image')->nullable();
            $table->string('banner_1_upload')->nullable();
            $table->string('banner_1_expired')->nullable();
       
            $table->string('banner_2_link')->nullable();
            $table->string('banner_2_image')->nullable();
            $table->string('banner_2_upload')->nullable();
            $table->string('banner_2_expired')->nullable();
     
            $table->string('banner_3_link')->nullable();
            $table->string('banner_3_image')->nullable();
            $table->string('banner_3_upload')->nullable();
            $table->string('banner_3_expired')->nullable();
     
            $table->string('banner_4_link')->nullable();
            $table->string('banner_4_image')->nullable();
            $table->string('banner_4_upload')->nullable();
            $table->string('banner_4_expired')->nullable();
         
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
        Schema::dropIfExists('page_banners');
    }
}
