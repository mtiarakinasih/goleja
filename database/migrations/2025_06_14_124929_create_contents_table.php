<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type', ['article', 'poster']);
            $table->text('content')->nullable(); // Isi artikel (boleh null kalau poster)
            $table->string('image')->nullable(); // Path gambar poster (boleh null kalau artikel)
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
