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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['active', 'inactive']);
            $table->date('start_date'); 
            $table->date('end_date');
            $table->string('coupons_code')->unique();
            $table->decimal('minimum_purchase', 10, 2)->nullable();
            $table->integer('limits');
            $table->enum('type', ['percentage', 'free_shipping', 'fixed_amount']);
            $table->decimal('jumlah', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
