<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('color_product');
        Schema::create('color_product', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->integer('color_id')->unsigned()->nullable()->index();
            $table->integer('product_id')->unsigned()->nullable()->index();
            $table->integer('quantity')->nullable();
            $table->integer('lot_id');
            $table->softDeletes();

            $table->timestamps();
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('color_product');
    }
}
