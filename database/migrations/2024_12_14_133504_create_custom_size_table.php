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
        Schema::create('custom_size', function (Blueprint $table) {
            $table->id('size_ID');
            $table->string('size');
            $table->integer('allowed_flavor');
            $table->decimal('price', 8, 2)->default(0); // Default price 0
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_size');
    }
};
