<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('perusahaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nama_perusahaan', 255);
            $table->text('alamat')->nullable();;
            $table->string('no_telepon', 20)->nullable();;
            $table->string('email', 255);
            $table->string('website', 255)->nullable();
            $table->string('logo', 255)->nullable();
            $table->tinyInteger('rating')->unsigned()->nullable()->comment('Nilai 1 sampai 5');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('perusahaans');
    }
};
