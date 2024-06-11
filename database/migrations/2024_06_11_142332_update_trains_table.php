<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * `price` DECIMAL(5,2) NOT_NULL
     */
    public function up(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->decimal('price', 5, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            //
        });
    }
};
