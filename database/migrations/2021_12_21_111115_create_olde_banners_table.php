<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOldeBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('olde_banners', function (Blueprint $table) {
            $table->id();
            $table->string('home_page_banner_1_link')->nullable();
            $table->string('home_page_banner_1_image')->nullable();
            $table->string('home_page_banner_1_upload')->nullable();
            $table->string('home_page_banner_1_expired')->nullable();
            $table->string('home_page_banner_2_link')->nullable();
            $table->string('home_page_banner_2_image')->nullable();
            $table->string('home_page_banner_2_upload')->nullable();
            $table->string('home_page_banner_2_expired')->nullable();
            $table->string('home_page_banner_3_link')->nullable();
            $table->string('home_page_banner_3_image')->nullable();
            $table->string('home_page_banner_3_upload')->nullable();
            $table->string('home_page_banner_3_expired')->nullable();
            $table->string('home_page_banner_4_link')->nullable();
            $table->string('home_page_banner_4_image')->nullable();
            $table->string('home_page_banner_4_upload')->nullable();
            $table->string('home_page_banner_4_expired')->nullable();
            $table->string('cateory_banner_1_link')->nullable();
            $table->string('cateory_banner_1_image')->nullable();
            $table->string('cateory_banner_1_upload')->nullable();
            $table->string('cateory_banner_1_expired')->nullable();
            $table->string('cateory_banner_2_link')->nullable();
            $table->string('cateory_banner_2_image')->nullable();
            $table->string('cateory_banner_2_upload')->nullable();
            $table->string('cateory_banner_2_expired')->nullable();
            $table->string('cateory_banner_3_link')->nullable();
            $table->string('cateory_banner_3_image')->nullable();
            $table->string('cateory_banner_3_upload')->nullable();
            $table->string('cateory_banner_3_expired')->nullable();
            $table->string('cateory_banner_4_link')->nullable();
            $table->string('cateory_banner_4_image')->nullable();
            $table->string('cateory_banner_4_upload')->nullable();
            $table->string('cateory_banner_4_expired')->nullable();
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
        Schema::dropIfExists('olde_banners');
    }
}
