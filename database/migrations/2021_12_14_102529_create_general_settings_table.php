<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('users_login_by')->nullable();
            $table->enum('auto_approved_new_user',["Yes","No"])->default("No");
            $table->enum('confirm_new_user_status',["Enabled","Disabled"])->default("Enabled");
            $table->enum('auto_approved_new_user_as_sellers',["Yes","No"])->default("Yes");
            $table->enum('auto_approved_new_user_as_buyers',["Yes","No"])->default("Yes");
            $table->string('website_name')->nullable();
            $table->string('site_title')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('h1_tages')->nullable();
            $table->string('h2_tags')->nullable();
            $table->string('h3_tages')->nullable();
            $table->string('website_currency')->nullable();
            $table->string('homepage_featured')->nullable();
            $table->string('category_featured')->nullable();
            $table->string('per_category_page')->nullable();
            $table->string('business_page')->nullable();
            $table->string('site_time_zone')->nullable();
            $table->string('geolocation_country')->nullable();
            $table->string('character_set')->nullable();
            $table->string('language')->nullable();
            $table->text('google_analytical_code')->nullable();
            $table->string('contract_form')->nullable();
            $table->text('banned_words')->nullable();
            $table->text('banned_content')->nullable();
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
        Schema::dropIfExists('general_settings');
    }
}
