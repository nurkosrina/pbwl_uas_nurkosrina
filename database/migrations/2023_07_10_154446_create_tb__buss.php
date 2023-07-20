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
        Schema::create('tb_buss ', function (Blueprint $table) {
            $table->increments('Bus_id');
            $table->string('Kode Bus_nip');
            $table->string('Nama Bus_nama');
            $table->string('Tujuan_jk');
            $table->string('Jadwal_Keberangkatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_Bus');
    }
};
