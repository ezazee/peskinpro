<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug'); 
            $table->text('description');
            $table->unsignedBigInteger('kategori_faq_id');
            $table->timestamps();
            $table->foreign('kategori_faq_id')->references('id')->on('kategori_faqs')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('faq');
    }
};
