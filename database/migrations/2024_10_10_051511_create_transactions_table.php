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
            'transactions', function (Blueprint $table) {
                $table->uuid('id')->primary();
                $table->foreignId('user_id')->constrained(
                    table: 'users',
                    indexName: 'transaction_user_id',
                )->onDelete('cascade');
                $table->foreignId('product_id')->constrained(
                    table: 'products',
                    indexName: 'transaction_product_id',
                )->onDelete('cascade');
                $table->bigInteger('total_price');
                $table->enum('status', ['PENDING', 'COMPLETED', 'CANCELED']);
                $table->enum('payment_method', ['BRI', 'BCA', 'MANDIRI', 'E-MONEY']);
                $table->string('transaction_proof');
                $table->string('shipping_address');
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
        Schema::dropIfExists('transactions');
    }
};
