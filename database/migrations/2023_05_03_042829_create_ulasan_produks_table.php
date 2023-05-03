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
        Schema::create('ulasan_produks', function (Blueprint $table) {
            $table->id();
            $table->integer('idProduk')->unique();
            $table->integer('idPengguna')->unique();
            $table->timestamps('tanggal_ulasan');
            $table->integer('rating');
            $table->string('komentar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ulasan_produks');
    }
};
