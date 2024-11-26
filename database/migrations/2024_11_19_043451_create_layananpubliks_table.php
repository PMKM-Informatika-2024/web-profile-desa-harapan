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
        Schema::create('layananpubliks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('kategori_fasilitas');
            $table->string('nama_fasilitas');     
            $table->string('gambar_fasilitas');   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layananpubliks');
    }
};
