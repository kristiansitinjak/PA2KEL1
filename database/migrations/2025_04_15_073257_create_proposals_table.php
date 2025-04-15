<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->string('perihal');
            $table->text('deskripsi');
            $table->string('file_path');
            $table->unsignedBigInteger('user_id'); // user yang upload
            $table->string('status')->default('Menunggu Persetujuan'); // Atau Disetujui / Ditolak
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('proposals');
    }
};
