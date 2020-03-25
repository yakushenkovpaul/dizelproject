<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSourceProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('source_products', function (Blueprint $table) {
					$table->integer('source_id');
					$table->bigInteger('product_id');
					$table->integer('price');
					$table->integer('count');
					$table->foreign('source_id')->references('id')->on('sources');
					$table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('source_products');
    }
}
