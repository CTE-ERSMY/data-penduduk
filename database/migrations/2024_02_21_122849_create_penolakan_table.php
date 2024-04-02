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
        Schema::create('had_penolakan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maklumat_pemohon_id')
                    ->constrained('maklumat_pemohon')
                    ->onDelete('cascade');
            $table->integer('int_kereta_mahal')->default('0');
            $table->integer('int_kereta_murah')->default('0');
            $table->integer('int_telefon_bimbit')->default('0');
            $table->integer('int_emas')->default('0');
            $table->integer('int_astro')->default('0');
            $table->integer('int_aircond')->default('0');
            $table->integer('int_radio')->default('0');
            $table->integer('int_simpanan')->default('0');
            $table->integer('int_home_theater')->default('0');
            $table->integer('int_perokok')->default('0');
            $table->decimal('kereta_mahal', 10, 2)->default('0.00');
            $table->decimal('kereta_murah', 10, 2)->default('0.00');
            $table->decimal('telefon_bimbit', 10, 2)->default('0.00');
            $table->decimal('emas', 10, 2)->default('0.00');
            $table->decimal('astro', 10, 2)->default('0.00');
            $table->decimal('aircond', 10, 2)->default('0.00');
            $table->decimal('radio', 10, 2)->default('0.00');
            $table->decimal('simpanan', 10, 2)->default('0.00');
            $table->decimal('home_theater', 10, 2)->default('0.00');
            $table->decimal('perokok', 10, 2)->default('0.00');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penolakan');
    }
};
