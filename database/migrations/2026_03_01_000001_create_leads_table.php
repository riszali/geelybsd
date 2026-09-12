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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            
            // Tipe Lead & Profil Pengunjung
            $table->string('type')->default('test_drive'); // test_drive, credit_simulation, general
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            
            // Data Kendaraan & Jadwal
            $table->string('car_model'); // ex5, ex2, starray, coolray
            $table->string('car_variant')->nullable();
            $table->date('preferred_date')->nullable();
            $table->string('preferred_time', 20)->nullable();
            $table->string('dealer_location')->nullable(); // bsd, pik, pondok-indah, home
            
            // Data Finansial (Jika dari Simulasi Kredit)
            $table->unsignedBigInteger('estimated_otr')->nullable();
            $table->unsignedTinyInteger('dp_percent')->nullable();
            $table->unsignedTinyInteger('tenor_years')->nullable();
            $table->string('leasing_partner')->nullable();
            $table->unsignedBigInteger('estimated_installment')->nullable();
            $table->unsignedBigInteger('estimated_tdp')->nullable();

            // Pipeline CRM
            $table->enum('status', [
                'new',                      // Baru masuk
                'contacted',                // Sudah dihubungi sales
                'test_drive_scheduled',    // Jadwal fix
                'spk_deal',                 // Closing / SPK
                'lost'                      // Batal / Tidak tertarik
            ])->default('new');

            // Catatan & Tracking
            $table->text('sales_notes')->nullable();
            $table->string('source')->default('website');
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};