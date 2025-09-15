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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('people');
            $table->string('people_position');
            $table->string('people_avatar');
            $table->enum('is_active',['active','not_active'])->default('not_active');
            $table->timestamps();
            $table->softDeletes(); // Assuming you want soft deletes like in the Slider model
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
