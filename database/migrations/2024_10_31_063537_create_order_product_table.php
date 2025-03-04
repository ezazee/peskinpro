<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->integer('quantity');
            $table->foreignId('size_id')->constrained('product_sizes');
            $table->decimal('harga', 10, 2);
            $table->decimal('discount', 10, 2);

            $table->foreignId('alamat_id')->nullable()->constrained('alamats')->onDelete('set null');
            $table->string('penerima')->nullable();
            $table->string('label')->nullable();
            $table->string('province_name')->nullable();
            $table->string('city_name')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('street'); 
            $table->string('postal_code');
            $table->string('no_telp');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_product');
    }
};
