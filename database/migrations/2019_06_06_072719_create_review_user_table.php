<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('review_user');
        Schema::create('review_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->integer('review_id')->unsigned()->nullable()->index();
            $table->softDeletes();

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('review_id')->references('id')->on('reviews')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review_user');
    }
}
