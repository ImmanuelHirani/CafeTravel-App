<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customers_location', function (Blueprint $table) {
            $table->id('location_ID');
            $table->unsignedBigInteger('customer_ID');
            $table->string('location_label');
            $table->string('reciver_address');
            $table->string('reciver_number');
            $table->string('reciver_name');
            $table->boolean('is_primary')->default(false);
            $table->timestamps();

            // Foreign key
            $table->foreign('customer_ID')->references('customer_ID')->on('customers')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customers_location');
    }
};
