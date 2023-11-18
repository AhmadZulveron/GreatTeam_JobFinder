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
        Schema::create('perusahaan_job_shares', function (Blueprint $table) {
            $table->id();
            $table->string('posisi');
            $table->integer('gaji_min');
            $table->integer('gaji_max');
            $table->string('kategori');
            $table->string('skill');
            $table->integer('pengalaman');
            $table->string('syarat_file');
            $table->foreignId('perusahaan_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perusahaan_job_shares');
    }
};
