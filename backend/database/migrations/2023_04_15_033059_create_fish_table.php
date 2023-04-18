<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fish', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('price');
            $table->longText('description');
            $table->string('status')->default('disponible');
            $table->string('image')->nullable();
            $table->string('quantity');
            $table->foreignId('buy_by_id')->constrained('buy_by','id')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories','id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fish');
    }
};
