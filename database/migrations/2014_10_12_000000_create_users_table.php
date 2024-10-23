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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('name');
            $table->string('slug');
            $table->string('email')->unique();
            $table->string('no_telp');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('status');
            $table->string('images');
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade'); 
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
