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
        Schema::create('waris', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maklumat_pemohon_id')->constrained()->on('maklumat_pemohon');
            $table->string('nama');
            $table->string('ic')->unique();
            $table->string('umur');
            $table->string('hubungan');
            $table->string('status');
            $table->string('fizikal');
            $table->enum('mental', ['Waras', 'Tidak Waras']);
            $table->decimal('pendapatan', 10, 2)->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waris');
    }
};
