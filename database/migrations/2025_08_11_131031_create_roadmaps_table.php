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
        Schema::create('roadmaps', function (Blueprint $table) {
            $table->id();
            $table->string('year_range')->nullable(); // e.g., "2024", "2025-2029"
            $table->string('side'); // 'left' or 'right' to control position
            $table->string('category')->nullable(); // e.g., "ARTIFICIAL INTELLIGENCE", "TOPIC RESEARCH"
            $table->string('type')->nullable(); // e.g., "Excellence Research", "Supporting Research", "Topic"
            $table->string('title'); // e.g., "Autonomous Vehicle", "AI in Maritime (2025-2029)"
            $table->text('description')->nullable(); // e.g., "Unmanned Aerial Vehicle and Its Applications"
            $table->integer('display_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roadmaps');
    }
};
