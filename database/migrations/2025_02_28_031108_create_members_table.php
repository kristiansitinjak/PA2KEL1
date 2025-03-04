<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('jabatan');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('photo')->nullable(); // Tambahkan kolom photo
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('members');
    }
};