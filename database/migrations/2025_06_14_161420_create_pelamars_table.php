<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pelamars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nama_lengkap', 255);
            $table->text('alamat')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('no_telepon', 20)->nullable();
            $table->string('email', 255);
            $table->string('foto_profil', 255)->nullable();
            $table->string('pendidikan', 255)->nullable();
            $table->string('cv_file', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pelamars');
    }
};
