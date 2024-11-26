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
        Schema::create('kelolakontaks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('no_whatsapp');
            $table->string('username_instagram');
            $table->string('username_facebook');
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelolakontaks');
    }
};
