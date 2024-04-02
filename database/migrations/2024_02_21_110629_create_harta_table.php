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
        Schema::create('harta', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maklumat_pemohon_id')
                    ->constrained('maklumat_pemohon')
                    ->onDelete('cascade');
            $table->string('status_kediaman');
            $table->string('jenis_kediaman');
            $table->string('kemudahan');
            $table->string('bilik');
            $table->string('kemudahan_tambahan');
            $table->decimal('bulanan', 10, 2)->default('0.00');
            $table->integer('rumah');
            $table->decimal('nilai_rumah', 10, 2)->default('0.00');
            $table->integer('tanah');
            $table->decimal('nilai_tanah', 10, 2)->default('0.00');
            $table->integer('kenderaan');
            $table->decimal('nilai_kenderaan', 10, 2)->default('0.00');
            $table->string('astro')->nullable();
            $table->string('barang_kemas')->nullable();
            $table->decimal('nilai_barang_kemas', 10, 2)->default('0.00');
            $table->string('simpanan')->nullable();
            $table->decimal('nilai_simpanan', 10, 2)->default('0.00');
            $table->string('lain')->nullable();
            $table->decimal('nilai_lain', 10, 2)->default('0.00');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('harta');
    }
};
