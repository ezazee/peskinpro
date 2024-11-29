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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('popup_image')->nullable();
            $table->string('headnavbanner')->nullable();
            $table->string('banner_bundle_head')->nullable();
            $table->string('banner_bundle_one')->nullable();
            $table->string('banner_bundle_two')->nullable();
            $table->string('banner_bundle_tree')->nullable();
            $table->string('bg_promo_image')->nullable();
            $table->string('knowlage_home')->nullable();
            $table->string('knowlage_shop')->nullable();
            $table->string('bg_flashsale')->nullable();
            $table->string('banner_flashsale_home')->nullable();
            $table->string('timer_flashsale')->nullable();
            $table->string('bannershop_head_one')->nullable();
            $table->string('bannershop_head_two')->nullable();
            $table->string('banner_produk_terlaris')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
