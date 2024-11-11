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
        Schema::create('exercise_ranks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exercise_id')->constrained('exercises');
            $table->foreignId('rank_id')->constrained('ranks');
            $table->integer('min_lift');
            $table->integer('max_lift');
            $table->integer('min_body_weight');
            $table->integer('max_body_weight');
            $table->enum('gender', ['male', 'female']);
            $table->integer('age');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercise_ranks');
    }
};
