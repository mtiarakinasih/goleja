<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lowongans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perusahaan_id')->constrained('perusahaans')->onDelete('cascade');
            $table->text('alamat');
            $table->foreignId('kategori_bidang_id')->constrained('kategori_bidangs')->onDelete('cascade');
            $table->foreignId('kategori_waktu_id')->constrained('kategori_waktus')->onDelete('cascade');
            $table->integer('gaji');
            $table->string('lokasi', 255);
            $table->longText('deskripsi');
            $table->string('foto')->nullable();
            $table->enum('status', ['pending','approved','rejected'])->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lowongans');
    }
};
