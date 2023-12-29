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
        Schema::create('api_menus', function (Blueprint $table) {
            $table->id();
            $table->string('idMeal')->unique();
            $table->string('strMeal');
            $table->string('strSlug')->unique();
            $table->integer('strPrice')->nullable();
            $table->integer('strQuantity')->nullable();
            $table->text('strDescription');
            $table->string('strMealThumb')->nullable();
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('api_menus');
    }
};
