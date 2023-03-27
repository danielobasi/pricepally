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
        Schema::create('recommended_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('initial_quantity')->unsigned();
            $table->integer('available_quantity')->unsigned();
            $table->integer('delivery_days')->unsigned();
            $table->string('unit')->comment('Measuring unit of product');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recommended_products');
    }
};
