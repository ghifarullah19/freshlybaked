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
            // $table->timestamp('date');
            $table->integer('total_price');
            $table->integer('total_item');
            $table->string('status');
            // $table->timestamps('order_at');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('menu_id')->constrained('menus');
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
