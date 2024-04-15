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
        Schema::create('curah_hujan', function (Blueprint $table) {
            $table->id();
            $table->integer('waktu_id');
            $table->integer('wilayah_id');
            $table->string('nama');
            $table->string('masukan_data');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curah_hujan');
    }
};
