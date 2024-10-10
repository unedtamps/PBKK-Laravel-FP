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
        Schema::create(
            'product_categories', function (Blueprint $table) {
                $table->uuid('id')->primary();
                $table->foreignId('product_id')->constrained(
                    table: 'products',
                    indexName: 'product_category_product_id',
                );
                $table->foreignId('category_id')->constrained(
                    table: 'categories',
                    indexName: 'product_category_category_id',
                );
                $table->timestamp('created_at')->useCurrent();
                $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_categories');
    }
};
