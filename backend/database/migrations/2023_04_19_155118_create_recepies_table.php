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
        Schema::create('recepies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('dish_type');
            $table->string('image');
            $table->integer('Serves');
            $table->integer('preparation_time');
            $table->string('cooking_time');
            $table->string('difficulty');
            $table->string('cuisine_type');
            $table->longText('ingredients');
            $table->longText('method');
            $table->foreignId('category')->constrained('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepies');
    }
};
