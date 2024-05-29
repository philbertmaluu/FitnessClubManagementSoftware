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
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('calories')->default(0);
            $table->boolean('carbohydrate')->default(0);
            $table->boolean('protein')->default(0);
            $table->boolean('fats')->default(0);
            $table->boolean('vitamins')->default(0);
            $table->boolean('dairyproducts')->default(0);
            $table->boolean('fruits')->default(0);
            $table->boolean('water')->default(0);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food');
    }
};