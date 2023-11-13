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
        Schema::create('addrres_details', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('fullname')->nullable();
            $table->string('phone')->nullable();
            $table->string('location')->nullable();
            $table->string('city')->nullable();
            $table->string('pincode')->nullable();
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
