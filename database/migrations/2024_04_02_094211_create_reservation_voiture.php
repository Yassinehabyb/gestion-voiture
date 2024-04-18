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
        Schema::create('reservation_voiture', function (Blueprint $table) {
            $table->foreignId('reservation_id')->constrained();
            $table->foreignId('voiture_id')->constrained();
            $table->primary(['reservation_id','voiture_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_voiture');
    }
};
