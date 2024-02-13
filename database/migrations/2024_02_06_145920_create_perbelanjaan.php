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
        Schema::create('perbelanjaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maklumat_pemohon_id')->constrained()->on('maklumat_pemohon');
            $table->decimal('makan', 10, 2)->default('0.00');
            $table->decimal('perubatan', 10, 2)->default('0.00');
            $table->decimal('bil', 10, 2)->default('0.00');
            $table->decimal('pengangkutan', 10, 2)->default('0.00');
            $table->decimal('sewa_rumah', 10, 2)->default('0.00');
            $table->decimal('persekolahan', 10, 2)->default('0.00');
            $table->decimal('lain', 10, 2)->default('0.00');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perbelanjaan');
    }
};
