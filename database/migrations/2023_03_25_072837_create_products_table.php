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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained('categories')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('sub_category_id')->nullable()->constrained('sub_categories')->cascadeOnUpdate()->nullOnDelete();
            $table->string('name')->fulltext();
            $table->string('slug')->unique()->comment('Unique product slug for clean url and better SEO');
            $table->integer('price')->unsigned()->comment('Current price of the product');
            $table->enum('season',array('in','off'))->comment("Flags if product is in or off it's season");
            $table->string('cover_image_url');
            $table->integer('previous_price')->unsigned()->comment('Previous price of the product if product was discounted')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
