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
            $table->string('alamat');   
            $table->string('gambar_fasilitas');   
            $table->string('fasilitas_utama');   
            $table->string('jam_operasional');   
            $table->string('kontak');   
            $table->string('akreditasi');   
            $table->string('jumlah_tenaga_pengajar');   
            $table->string('jumlah_murid');   
            $table->string('visi');   
            $table->string('misi');   
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
