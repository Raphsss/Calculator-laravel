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
        Schema::create('calculos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->decimal('numero1', 10, 2); 
            $table->decimal('numero2', 10, 2);
            $table->string('operacao');
            $table->decimal('resultado', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calculos');
    }
};
