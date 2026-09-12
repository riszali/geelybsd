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
        Schema::create('page_visits', function (Blueprint $table) {
            $table->id();
            
            // Detail URL dan Lokasi Akses
            $table->string('url', 255)->index();
            $table->string('path', 255)->index();
            $table->string('ip_address', 45)->nullable()->index();
            
            // User Agent dan Perangkat
            $table->text('user_agent')->nullable();
            $table->string('device_type', 20)->default('desktop')->index(); // mobile, desktop, tablet
            $table->string('referer', 255)->nullable();
            
            // Tanggal Kunjungan untuk Agregasi Cepat
            $table->date('visit_date')->index();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_visits');
    }
};