<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_type')->unsigned();
            $table->string('name');
            $table->string('description');
            $table->string('unit_price');
            $table->string('promotion_price');
            $table->string('image');
            $table->string('unit');
            $table->string('new');
            $table->timestamps();

            $table->foreign('type_product_id')->references('id')->on('id_type')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
