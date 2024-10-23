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
        Schema::create('invoices', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('order_id'); 
        $table->string('invoice_number')->unique(); 
        $table->decimal('amount', 10, 2);
        $table->date('invoice_date'); 
        $table->enum('payment_status', ['unpaid', 'paid', 'refunded'])->default('unpaid');
        $table->timestamps();
        $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};