<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('address_user');
        Schema::create('address_user', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->integer('address_id')->unsigned()->nullable()->index();
            $table->softDeletes();

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address_user');
    }
}
