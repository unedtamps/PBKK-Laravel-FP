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
            'detail_transactions', function (Blueprint $table) {
                $table->uuid('id')->primary();
                $table->foreignId('product_id')->constrained(
                    table: 'products',
                    indexName: 'detail_transaction_product_id',
                );
                $table->foreignId('transaction_id')->constrained(
                    table: 'transactions',
                    indexName: 'detail_transaction_transaction_id',
                );
                $table->bigInteger('amount');
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
        Schema::dropIfExists('detail_transactions');
    }
};
