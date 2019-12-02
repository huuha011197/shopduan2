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
            $table->double('unit_price');
            $table->double('promotion_price');
            $table->string('image');
            $table->string('unit')->default('chiếc');
            $table->string('new')->default('1');
            $table->timestamps();

            $table->foreign('id_type')->references('id')->on('type_products')->onDelete('cascade');
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
