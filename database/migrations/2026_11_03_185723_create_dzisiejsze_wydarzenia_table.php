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
        Schema::create('dzisiejsze_wydarzenia', function (Blueprint $table) {
            $table->id();
            $table->json("dane");
            $table->date('dzien_wydarzenia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dzisiejsze_wydarzenia');
    }
};
