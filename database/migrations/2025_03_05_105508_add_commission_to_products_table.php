<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('product_sizes', function (Blueprint $table) {
            $table->decimal('commission', 10, 2)->nullable()->default(0)->after('price');
        });
    }

    public function down()
    {
        Schema::table('product_sizes', function (Blueprint $table) {
            $table->dropColumn('commission');
        });
    }
};
