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
        Schema::create('had_penambahan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maklumat_pemohon_id')
                    ->constrained('maklumat_pemohon')
                    ->onDelete('cascade');
            $table->integer('int_kos_kronik')->default('0');
            $table->integer('int_cacat_semulajadi')->default('0');
            $table->integer('int_cacat_mendatang')->default('0');
            $table->integer('int_ibu_bapa')->default('0');
            $table->integer('int_ibu_tinggal')->default('0');
            $table->integer('int_masalah_keluarga')->default('0');
            $table->integer('int_ibu_tunggal')->default('0');
            $table->decimal('kos_kronik', 10, 2)->default('0.00');
            $table->decimal('cacat_semulajadi', 10, 2)->default('0.00');
            $table->decimal('cacat_mendatang', 10, 2)->default('0.00');
            $table->decimal('ibu_bapa', 10, 2)->default('0.00');
            $table->decimal('ibu_tinggal', 10, 2)->default('0.00');
            $table->decimal('masalah_keluarga', 10, 2)->default('0.00');
            $table->decimal('ibu_tunggal', 10, 2)->default('0.00');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('had_penambahan');
    }
};
