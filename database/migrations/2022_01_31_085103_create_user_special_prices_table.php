<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSpecialPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_special_prices', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('period')->nullable();
            $table->string('price')->nullable();
         
            $table->string('user_price')->nullable();
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
        Schema::dropIfExists('user_special_prices');
    }
}
