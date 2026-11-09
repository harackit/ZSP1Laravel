<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('informacje', function (Blueprint $table) {
            $table->id();
            $table->string('wazne_informacje');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('informacje');
    }
};
