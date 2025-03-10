<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration {
    public function up() {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('nim')->unique();
            $table->string('kelas');
            $table->integer('angkatan');
            $table->boolean('status_pembayaran')->default(false); // False = Belum Lunas
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('mahasiswas');
    }
}
