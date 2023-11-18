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
        Schema::create('user_background_studys', function (Blueprint $table) {
            $table->id();
            $table->string('institusi');
            $table->string('gelar');
            $table->string('bidang_study');
            $table->string('mulai');
            $table->string('tamat');
            $table->string('profile_url');
            $table->foreignId('users_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_background_study');
    }
};
