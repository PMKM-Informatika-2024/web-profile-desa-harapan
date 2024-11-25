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
            $table->integer('total_rw');
            $table->integer('suku_melayu');
            $table->integer('suku_madura');
            $table->integer('suku_tionghoa');
            $table->integer('suku_dayak');
            $table->integer('suku_jawa');
            $table->integer('suku_bugis');
            $table->integer('suku_lainnya');
            $table->integer('agama_islam');
            $table->integer('agama_katolik');
            $table->integer('agama_protestan');
            $table->integer('agama_buddha');
            $table->integer('agama_hindu');
            $table->integer('agama_konghucu');
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
