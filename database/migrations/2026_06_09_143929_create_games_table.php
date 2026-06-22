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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->integer('price_numeric')->default(0);
            $table->string('image')->nullable();
            $table->string('os')->nullable();
            $table->string('processor')->nullable();
            $table->string('memory')->nullable();
            $table->string('graphics')->nullable();
            $table->string('storage')->nullable();
            $table->string('directx')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
