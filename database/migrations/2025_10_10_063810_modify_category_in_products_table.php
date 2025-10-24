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
        Schema::table('products', function (Blueprint $table) {
            // Hapus kolom 'category' yang lama jika ada
            if (Schema::hasColumn('products', 'category')) {
                $table->dropColumn('category');
            }
            // Tambahkan kolom 'category_id' sebagai foreign key
            $table->foreignId('category_id')->nullable()->constrained('categories')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
