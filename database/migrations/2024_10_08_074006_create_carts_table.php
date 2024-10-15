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
        Schema::create('carts', function (Blueprint $table) {
            $table->id(); // This creates the 'id' column
            $table->unsignedBigInteger('user_id')->nullable(); // For logged-in users
            $table->string('guest_id')->nullable(); // For guests
            $table->timestamps();

            // Add foreign key constraint if you have user_id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('carts');
    }
};
