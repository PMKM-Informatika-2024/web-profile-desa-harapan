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
        Schema::create('profildesas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_desa');
            $table->text('sejarah_desa');
            $table->string('gambar_desa_1');
            $table->string('gambar_desa_2');
            $table->string('gambar_desa_3');
            $table->string('gambar_desa_4');
            $table->string('gambar_desa_5');
            $table->text('visi_desa');
            $table->text('misi_desa');
            $table->integer('total_jiwa');
            $table->integer('total_kk');
            $table->integer('total_dusun');
            $table->integer('total_rt');
            $table->string('suku_melayu');
            $table->string('suku_madura');
            $table->string('suku_tionghoa');
            $table->string('suku_dayak');
            $table->string('suku_jawa');
            $table->string('suku_bugis');
            $table->string('suku_lainnya');
            $table->string('agama_islam');
            $table->string('agama_katolik');
            $table->string('agama_protestan');
            $table->string('agama_buddha');
            $table->string('agama_hindu');
            $table->string('agama_konghucu');
            $table->text('peta_desa'); 
            $table->text('kantor_desa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profildesas');
    }
};
