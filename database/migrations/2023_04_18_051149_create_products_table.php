<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category')->constrained('categories')->onDelete('cascade');
            $table->boolean('available')->default(false);
            $table->string('name');
            $table->string('title');
            $table->unsignedSmallInteger('count')->default(0);
            $table->unsignedDecimal('price', 5, 0)->default(0);
            $table->string('country');
            $table->string('taste');
            $table->string('compound');
            $table->string('image');
            $table->string('description', 4096)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
