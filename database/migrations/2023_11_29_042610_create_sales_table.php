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
        Schema::create('sales', function (Blueprint $table) {
            $table->id('sales_id');
            $table->integer('total_price');
            $table->integer('total_item');
            $table->string('status');
            $table->timestamp('order_at');
            $table->foreignId('users_id')->references('users_id')->on('users');
            $table->foreignId('menus_id')->references('menus_id')->on('menus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
