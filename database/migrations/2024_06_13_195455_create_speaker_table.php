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
        Schema::create('speaker', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->string('email')->unique();
            $table->string('photo')->nullable();
            $table->string('phone', 16);
            $table->string('company')->nullable();
            $table->text('bio')->nullable();
            $table->text('professional_experiences')->nullable();
            $table->string('website')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();
            $table->string('github')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('speaker');
    }
};
