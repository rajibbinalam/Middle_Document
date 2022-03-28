<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisings', function (Blueprint $table) {

            $table->id();
            $table->integer('cat_id')->nullable();
            $table->integer('subcat_id')->nullable();
            $table->string('title')->nullable();
            $table->integer('door')->nullable();
            $table->integer('mileage')->nullable();
            $table->integer('year')->nullable();
            $table->string('transmissions')->nullable();
            $table->string('airconditioning')->nullable();
            $table->longText('description')->nullable();
            $table->string('main_image')->nullable();
            $table->integer('city_id')->nullable();
            $table->string('name')->nullable();
            $table->string('color')->nullable();
            $table->string('body')->nullable();
            $table->string('price')->nullable();
            $table->string('condition')->nullable();
            $table->string('seller_type')->nullable();
            $table->string('registered')->nullable();
            $table->string('registered_experiy')->nullable();
            $table->integer('suburbs_id')->nullable();
            $table->string('email')->nullable();
            $table->integer('phone')->nullable();
            

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
        Schema::dropIfExists('advertisings');
    }
}
