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
        Schema::create('user_preferensi_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('tipe_jobs');
            $table->integer('min_gaji');
            $table->integer('max_gaji');
            $table->string('kota');
            $table->foreignId('users_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_preferensi_jobs');
    }
};
