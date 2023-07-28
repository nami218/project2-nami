<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
           $table->id();
           $table->unsignedbigInteger('product_category_id')->nullable();
           $table->foreign('product_category_id')->references('id')->on('product_category')->onDelete('cascade');
           $table->string('name',255)->nullable();
           $table->string('sku',255)->nullable();
           $table->string('slug',255)->nullable();
           $table->decimal('price',10,0)->nullable()->unsigned();
           $table->decimal('discount_price',10,0)->nullable()->unsigned();
           $table->text('short_description')->nullable();
           $table->text('description')->nullable();
           $table->text('specification')->nullable();
           $table->integer('qty')->unsigned();
           $table->string('shipping')->nullable();
           $table->float('weight')->nullable()->unsigned();
           $table->string('image_url',255)->nullable();
           $table->boolean('status')->default(1);
           $table->timestamps();
           $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
