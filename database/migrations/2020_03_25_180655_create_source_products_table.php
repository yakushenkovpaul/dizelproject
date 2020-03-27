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
			Schema::dropIfExists('source_products');
        Schema::create('source_products', function (Blueprint $table) {
					$table->bigIncrements('id');
					$table->integer('source_id')->unsigned();
					$table->bigInteger('product_id')->unsigned();
					$table->integer('price')->default(0);
					$table->integer('count')->default(0);
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
        Schema::dropIfExists('source_products');
    }
}
