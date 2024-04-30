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
        Schema::create('scholarproviders', function (Blueprint $table) {
            $table->id();
            $table->string('pname')->nullable(); //Provider Name
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address')->nullable();
            $table->string('contact_no')->nullable();  
            $table->string('payment_method')->nullable();
            $table->string('payment_email')->nullable();  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarproviders');
    }
};
