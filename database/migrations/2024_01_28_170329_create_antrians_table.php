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
        Schema::create('antrians', function (Blueprint $table) {
            $table->id();
            $table->string('id_dosen');
            $table->string('nama_dosen');
            $table->string('nim');
            $table->string('nama_mhs');
            $table->boolean('sudah');
            $table->date('tanggalBimbingan');
            $table->string('kd_dosen');
            $table->string('pesan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antrians');
    }
};
