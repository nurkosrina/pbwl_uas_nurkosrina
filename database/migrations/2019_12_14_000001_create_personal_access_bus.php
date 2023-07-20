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
        Schema::create('personal_access_bus', function (Blueprint $table) {
            $table->id();
            $table->morphs('bus');
            $table->string('kode');
            $table->string('nama', 64)->unique();
            $table->text('tujuan')->nullable();
            $table->timestamp('jadwal')->nullable();
            $table->timestamp('bus_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
