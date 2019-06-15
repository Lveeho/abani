<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressCityRegionCountryUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::dropIfExists('address_city_region_country_user');
        Schema::create('address_city_region_country_user', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->integer('user_id')->unsigned()->index();
            $table->integer('address_id')->unsigned()->index();
            $table->integer('city_id')->unsigned()->index();
            $table->integer('region_id')->unsigned()->index();
            $table->integer('country_id')->unsigned()->index();
            $table->softDeletes();

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address_city_region_country_user');
    }
}
