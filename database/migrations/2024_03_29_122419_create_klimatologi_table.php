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
        Schema::create('klimatologi', function (Blueprint $table) {
            $table->id();
            $table->integer('waktu_id');
            $table->integer('wilayah_id');
            $table->string('nama');
            $table->string('thermometer_max');
            $table->string('thermometer_min');
            $table->string('pcsychrometer_standar_bola_kering');
            $table->string('pcsychrometer_standar_bola_basah');
            $table->string('thermometer_apung_max');
            $table->string('thermometer_min_tanpa_gambar');
            $table->string('penguapan_ditambah');
            $table->string('penguapan_dibuang');
            $table->string('penguapan');
            $table->string('anemometer_angin');
            $table->string('hujan_manual');
            $table->string('foto_1');
            $table->string('foto_2');
            $table->string('foto_3');
            $table->string('foto_4');
            $table->string('foto_5');
            $table->string('foto_6');
            $table->string('foto_7');
            $table->string('foto_8');
            $table->string('foto_9');
            $table->string('foto_10');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('klimatologi');
    }
};
