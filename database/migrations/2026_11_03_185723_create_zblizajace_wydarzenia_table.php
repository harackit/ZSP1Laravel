<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('zblizajace_wydarzenia', function (Blueprint $table) {
            $table->id();
            $table->string("nazwa_wydarzenia");
            $table->datetime('dzien_czas_wydarzenia');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('zblizajace_wydarzenia');
    }
};
