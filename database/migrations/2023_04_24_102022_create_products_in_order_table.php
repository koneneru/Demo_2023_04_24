<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsInOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_in_order', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order')->constrained('orders')->onDelete('cascade');
            $table->foreignId('product')->constrained('products')->onDelete('cascade');
            $table->unsignedSmallInteger('count')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_in_order');
    }
}
