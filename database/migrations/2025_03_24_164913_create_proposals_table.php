<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->id('proposal_id');
            $table->unsignedBigInteger('program_id');
            $table->string('title');
            $table->string('document_path');
            $table->enum('status', ['Pending Approval', 'Approved', 'Rejected'])->default('Pending Approval');
            $table->unsignedBigInteger('submitted_by');
            $table->timestamp('submitted_at')->nullable();
            $table->unsignedBigInteger('approved_by')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamps();

            // Foreign Keys
            $table->foreign('submitted_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('proposals');
    }
};
