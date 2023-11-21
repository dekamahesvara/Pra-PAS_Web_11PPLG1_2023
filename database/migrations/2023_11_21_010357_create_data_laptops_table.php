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
        Schema::create('data_laptops', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('brand');
            $table->integer('harga');
            $table->Date('tanggal_pembuatan')->default(now());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_laptops');
    }
};
