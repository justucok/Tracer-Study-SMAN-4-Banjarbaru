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
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('angkatan');
            $table->integer('thn_lulus');
            $table->string('phone');
            $table->string('kualitas_pengajaran');
            $table->string('fasilitas_sekolah');
            $table->string('lingkungan_sekolah');
            $table->string('dukungan_administrasi');
            $table->string('komunikasi');
            $table->string('keterlibatan_ortu');
            $table->string('kesejahteraan_siswa');
            $table->string('prestasi_akademik');
            $table->string('kegiatan_ekskul');
            $table->string('pengalaman_keseluruhan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveys');
    }
};
