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
        Schema::table('suppliments', function (Blueprint $table) {
            $table->integer('duration');
            $table->string('quantity')->nullable();
            $table->string('quality')->nullable();
            $table->integer('days');
            $table->integer('meals');
            $table->text('description')->nullable();
            $table->json('food_ids');
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('suppliments', function (Blueprint $table) {
            $table->dropColumn('duration');
            $table->dropColumn('quantity');
            $table->dropColumn('quality');
            $table->dropColumn('days');
            $table->dropColumn('meals');
            $table->dropColumn('description');
            $table->dropColumn('food_ids');
            $table->dropColumn('image');
        });
    }
};
