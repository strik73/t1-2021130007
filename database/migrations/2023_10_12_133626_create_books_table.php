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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->char('isbn',13)->primary();
            $table->string('judul')->nullable(false);
            $table->integer('halaman')->default(0)->nullable(false);
            $table->string('kategori')->default('uncategorized');
            $table->string('penerbit')->nullable(false);
            $table->timestamp('published_at');
            $table->timestamp('updated_at');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
