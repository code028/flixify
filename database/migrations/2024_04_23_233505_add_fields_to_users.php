<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->unique(true)->nullable(false)->after('name');
            $table->enum('role', ['user', 'moderator', 'admin'])->nullable(false)->default('user');
            $table->string('image')->unique(true)->nullable(true);
            $table->enum('theme', ['true','false'])->default('false');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('role');
            $table->dropColumn('image');
            $table->dropColumn('theme');
        });
    }
};
