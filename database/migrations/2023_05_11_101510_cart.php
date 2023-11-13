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
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('model_name')->nullable();
            $table->string('quantity')->default(1);
            $table->string('price')->nullable();
            $table->string('totalprice')->nullable();
            $table->string('user_id')->nullable();
            $table->string('product_id')->nullable();
            $table->string('count')->default(1)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};
