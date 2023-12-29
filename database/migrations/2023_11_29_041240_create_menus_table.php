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
        Schema::create('menus', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('slug')->unique();
            $table->integer('price')->nullable();
            $table->integer('quantity')->nullable();
            $table->text('description');
            $table->string('image')->nullable();
            $table->integer('is_api')->default(-1);
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
