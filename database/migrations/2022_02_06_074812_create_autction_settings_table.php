<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutctionSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autction_settings', function (Blueprint $table) {
            $table->id();
            $table->enum('enable',['1','0'])->default('1');
            $table->string('listing_duration')->nullable();
            $table->string('duration_day_list')->nullable();
            $table->enum('allow_change_duration',['1','0'])->default('1');
            $table->enum('allow_edit_listing',['1','0'])->default('1');
            $table->string('max_auto_relis')->nullable();
            $table->string('sniper_protection_second')->nullable();
            $table->enum('enable_reserve',['1','0'])->default('1');
            $table->enum('enable_quick_bid',['1','0'])->default('1');
            $table->enum('enable_auto_bid',['1','0'])->default('1');
            $table->enum('enable_large_bid_config',['1','0'])->default('1');
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
        Schema::dropIfExists('autction_settings');
    }
}
