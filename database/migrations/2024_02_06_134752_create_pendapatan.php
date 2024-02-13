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
        Schema::create('pendapatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maklumat_pemohon_id')->constrained()->on('maklumat_pemohon');
            $table->string('jawatan');
            $table->decimal('gaji', 10, 2);
            $table->string('majikan');
            $table->string('jawatan_psgn')->nullable()->default('Tiada Maklumat');
            $table->decimal('gaji_psgn', 10, 2)->nullable()->default('0.00');
            $table->string('majikan_psgn')->nullable()->default('Tiada Maklumat');
            $table->decimal('sumbangan_anak', 10, 2)->nullable()->default('0.00');
            $table->decimal('sumbangan_saudara', 10, 2)->nullable()->default('0.00');
            $table->decimal('sampingan', 10, 2)->nullable()->default('0.00');
            $table->decimal('sumbangan_agensi', 10, 2)->nullable()->default('0.00');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendapatan');
    }
};
