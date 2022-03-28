<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('business_name')->nullable();
            $table->string('logo')->nullable();
            $table->string('industry')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('suburbs_id')->nullable();
            $table->string('mobile')->nullable();
            $table->string('landline')->nullable();
            $table->string('website')->nullable();
            $table->longText('description')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('address')->nullable();
            $table->string('tags')->nullable();
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
        Schema::dropIfExists('listings');
    }
}
