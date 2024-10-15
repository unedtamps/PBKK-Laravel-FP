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
            'carts', function (Blueprint $table) {
                $table->uuid('id')->primary();
                $table->foreignId('product_id')->constrained(
                    table: 'products',
                    indexName: 'cart_product_id',
                );
                $table->foreignId('user_id')->constrained(
                    table: 'users',
                    indexName: 'cart_user_id',
                );
                $table->bigInteger('amount');
                $table->bigInteger('total_price');
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
        Schema::dropIfExists('carts');
    }
};
