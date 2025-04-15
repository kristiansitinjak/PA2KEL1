<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('program_kerjas', function (Blueprint $table) {
            $table->id();
            $table->string('kegiatan')->unique();
            $table->text('deskripsi');
            $table->text('tujuan');
            $table->text('tahap_pelaksanaan');
            $table->date('waktu_pelaksanaan');
            $table->string('tempat');
            $table->text('indikator');
            $table->text('kekuatan');
            $table->text('kelemahan');
            $table->bigInteger('perkiraan_biaya');
            $table->string('sumber_dana');
            $table->boolean('terlaksana')->default(false);
            $table->timestamps();
        });
    }
    

    public function down(): void
    {
        Schema::dropIfExists('program_kerjas');
    }
};
