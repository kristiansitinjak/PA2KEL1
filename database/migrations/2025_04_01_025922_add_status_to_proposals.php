<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('proposals', function (Blueprint $table) {
            if (!Schema::hasColumn('proposals', 'status')) {
                $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending')->after('file_path');
            }

            if (!Schema::hasColumn('proposals', 'reviewed_by')) {
                $table->unsignedBigInteger('reviewed_by')->nullable()->after('status');
            }
        });
    }

    public function down(): void
    {
        Schema::table('proposals', function (Blueprint $table) {
            if (Schema::hasColumn('proposals', 'status')) {
                $table->dropColumn('status');
            }

            if (Schema::hasColumn('proposals', 'reviewed_by')) {
                $table->dropColumn('reviewed_by');
            }
        });
    }
};
