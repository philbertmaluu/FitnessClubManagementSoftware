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
        Schema::create('trainernotifications', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('admin');
            $table->boolean('is_active');
            $table->text('prototype');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainernotifications');
    }
};
