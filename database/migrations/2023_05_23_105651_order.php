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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('model_name')->nullable();
            $table->string('price')->nullable();
            $table->string('quantity')->nullable();
            $table->string('image')->nullable();
            $table->string('order_status')->default('Pending')->nullable();
            $table->string('payment_methods')->nullable();
            $table->string('count')->default(1)->nullable();
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
