<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id('product_id');
            $table->string('product_name')->unique();
            $table->string('product_type')->nullable();
            $table->string('product_quantity')->nullable();
            $table->dateTime('product_datetime')->nullable();
            $table->dateTime('product_datetime_1')->nullable();
            $table->dateTime('product_datetime_2')->nullable();
            $table->dateTime('product_datetime_3')->nullable();
            $table->string('product_status')->nullable();
            $table->string('product_status_1')->nullable();
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
        Schema::dropIfExists('products');
    }
}
